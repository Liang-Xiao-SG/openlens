<?php
class UserModel {
    private $mysqli;

    public function __construct() {
        require_once '../config/config.php';
        // 使用 MySQLi 建立数据库连接
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->mysqli->connect_error) {
            die("数据库连接失败: " . $this->mysqli->connect_error);
        }

        // 设置字符集为 UTF-8
        $this->mysqli->set_charset("utf8");
    }

    // 检查用户是否存在（根据用户名或邮箱）
    public function userExists($username, $email) {
        $stmt = $this->mysqli->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();
        $exists = $stmt->num_rows > 0;
        $stmt->close();
        return $exists;
    }

    // 注册新用户
    public function register($username, $email, $password) {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->mysqli->prepare("INSERT INTO users (username, email, password_hash, is_admin, created_at) VALUES (?, ?, ?, 0, NOW())");
        $stmt->bind_param("sss", $username, $email, $password_hash);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // 根据用户名或邮箱获取用户信息
    public function getUserByIdentifier($identifier) {
        $stmt = $this->mysqli->prepare("SELECT id, username, email, password_hash, is_admin FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $identifier, $identifier);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    // 根据邮箱获取用户信息
    public function getUserByEmail($email) {
        $stmt = $this->mysqli->prepare("SELECT id, username, email, password_hash, is_admin FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    // 设置重置密码令牌
    public function setResetToken($user_id, $token) {
        $stmt = $this->mysqli->prepare("UPDATE users SET reset_token = ?, reset_expires = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE id = ?");
        $stmt->bind_param("si", $token, $user_id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // 根据重置令牌获取用户信息
    public function getUserByResetToken($token) {
        $stmt = $this->mysqli->prepare("SELECT id, username, email FROM users WHERE reset_token = ? AND reset_expires > NOW()");
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    // 更新用户密码
    public function updatePassword($user_id, $new_password) {
        $password_hash = password_hash($new_password, PASSWORD_BCRYPT);
        $stmt = $this->mysqli->prepare("UPDATE users SET password_hash = ? WHERE id = ?");
        $stmt->bind_param("si", $password_hash, $user_id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // 清除重置密码令牌
    public function clearResetToken($user_id) {
        $stmt = $this->mysqli->prepare("UPDATE users SET reset_token = NULL, reset_expires = NULL WHERE id = ?");
        $stmt->bind_param("i", $user_id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    // 关闭数据库连接
    public function __destruct() {
        $this->mysqli->close();
    }
}
?>

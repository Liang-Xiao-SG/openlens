<?php
session_start();
require_once '../models/UserModel.php';
require_once '../lib/PHPMailer/class.phpmailer.php';
require_once '../lib/PHPMailer/class.smtp.php';

/*
 * 使用 PHPMailer 5.2，不使用命名空间。
 * 确保已下载并正确放置 class.phpmailer.php 和 class.smtp.php 文件。
 */

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // 显示注册表单
    public function showRegisterForm() {
        include '../views/user/register.php';
    }

    // 处理用户注册
    public function register() {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // 基本验证
        if (empty($username) || empty($email) || empty($password)) {
            $error = "请填写所有必填字段。";
            include '../views/user/register.php';
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "无效的邮箱地址。";
            include '../views/user/register.php';
            return;
        }

        // 检查用户是否已存在
        if ($this->userModel->userExists($username, $email)) {
            $error = "用户名或邮箱已被注册。";
            include '../views/user/register.php';
            return;
        }

        // 注册用户
        if ($this->userModel->register($username, $email, $password)) {
            $_SESSION['user_id'] = $this->userModel->getUserByIdentifier($username)['id'];
            $_SESSION['username'] = $username;
            $_SESSION['is_admin'] = 0;
            header("Location: ../views/game_lobby.php");
            exit();
        } else {
            $error = "注册失败，请稍后再试。";
            include '../views/user/register.php';
            return;
        }
    }

    // 显示登录表单
    public function showLoginForm() {
        include '../views/user/login.php';
    }

    // 处理用户登录
    public function login() {
        $identifier = trim($_POST['identifier']); // 用户名或邮箱
        $password = $_POST['password'];

        // 基本验证
        if (empty($identifier) || empty($password)) {
            $error = "请填写所有必填字段。";
            include '../views/user/login.php';
            return;
        }

        $user = $this->userModel->getUserByIdentifier($identifier);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = $user['is_admin'];
            header("Location: ../views/game_lobby.php");
            exit();
        } else {
            $error = "用户名或密码错误。";
            include '../views/user/login.php';
            return;
        }
    }

    // 处理用户登出
    public function logout() {
        $_SESSION = array();
        session_destroy();
        header("Location: ../views/login.php");
        exit();
    }

    // 显示忘记密码表单
    public function showForgotPasswordForm() {
        include '../views/user/forgot_password.php';
    }

    // 处理忘记密码请求
    public function forgotPassword() {
        $email = trim($_POST['email']);

        if (empty($email)) {
            $error = "请填写您的注册邮箱。";
            include '../views/user/forgot_password.php';
            return;
        }

        $user = $this->userModel->getUserByEmail($email);
        if (!$user) {
            $error = "该邮箱未注册。";
            include '../views/user/forgot_password.php';
            return;
        }

        // 生成重置令牌
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        $this->userModel->setResetToken($user['id'], $token);

        // 发送重置密码邮件
        $resetLink = "https://" . $_SERVER['HTTP_HOST'] . "/views/user/reset_password.php?token=" . $token;

        $mail = new PHPMailer();
        // 发送邮件不使用异常处理
        $mail->isSMTP();
        $mail->Host       = 'smtp.163.com'; // 根据实际使用的邮件服务商调整
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@163.com'; // 替换为您的发件邮箱
        $mail->Password   = 'your_email_password'; // 替换为您的邮箱密码或授权码
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // 收发件人设置
        $mail->setFrom('your_email@163.com', '狼人杀游戏');
        $mail->addAddress($email);

        // 邮件内容
        $mail->isHTML(true);
        $mail->Subject = '密码重置请求';
        $mail->Body    = "亲爱的用户，<br>请点击以下链接重置您的密码：<a href='$resetLink'>$resetLink</a><br>如果您未请求重置密码，请忽略此邮件。";

        if(!$mail->send()) {
            $error = "邮件发送失败: " . $mail->ErrorInfo;
            include '../views/user/forgot_password.php';
        } else {
            $success = "重置链接已发送到您的邮箱。";
            include '../views/user/forgot_password.php';
        }
    }

    // 显示重置密码表单
    public function showResetPasswordForm() {
        $token = isset($_GET['token']) ? $_GET['token'] : '';
        if (empty($token) || !$this->userModel->getUserByResetToken($token)) {
            $error = "重置链接无效或已过期。";
            include '../views/user/reset_password.php';
            return;
        }
        include '../views/user/reset_password.php';
    }

    // 处理重置密码
    public function resetPassword() {
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';

        if (empty($token) || empty($new_password)) {
            $error = "请填写所有必填字段。";
            include '../views/user/reset_password.php';
            return;
        }

        $user = $this->userModel->getUserByResetToken($token);
        if (!$user) {
            $error = "重置链接无效或已过期。";
            include '../views/user/reset_password.php';
            return;
        }

        if ($this->userModel->updatePassword($user['id'], $new_password)) {
            $this->userModel->clearResetToken($user['id']);
            $success = "密码已成功更新，请登录。";
            include '../views/user/login.php';
        } else {
            $error = "密码更新失败，请稍后再试。";
            include '../views/user/reset_password.php';
        }
    }
}
?>

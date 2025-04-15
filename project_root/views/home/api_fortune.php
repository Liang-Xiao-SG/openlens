<?php
date_default_timezone_set("Asia/Singapore");
require_once '../../config/config.php';
function getFortuneFromDeepSeek($birthdate, $today) {
    $prompt = "请用简体中文回答：你是一个星座大师。今天是 $today 。一个出生在 $birthdate 的人，今天的运势如何？请生成一段鼓励和实用建议的运势说明。include 生肖和星座的运势
    桃花运势。
    include English Translation";

    $payload = array(
        "model" => "deepseek/deepseek-r1-distill-llama-70b:free",
        "messages" => array(
            array("role" => "user", "content" => $prompt)
        )
    );

    $ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer '. OPENROUTER_API_KEY  // 替换你的 Key
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        return "调用出错：" . curl_error($ch);
    }

    curl_close($ch);
    $data = json_decode($response, true);
    return isset($data['choices'][0]['message']['content'])
        ? $data['choices'][0]['message']['content']
        : "无法获取今日运势，请稍后再试。";
}

$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
$today = date('Y-m-d');

if (!$birthdate) {
    echo json_encode(array('error' => '缺少参数'));
    exit;
}

$fortune = getFortuneFromDeepSeek($birthdate, $today);

header('Content-Type: application/json');
echo json_encode(array('fortune' => $fortune));

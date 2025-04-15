<?php
date_default_timezone_set("Asia/Singapore");

function generateTotoNumbers($birthdate, $today) {
    $seed = crc32($birthdate . $today);
    mt_srand($seed);
    $numbers = array();
    while (count($numbers) < 6) {
        $num = mt_rand(1, 49);
        if (!in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    }
    sort($numbers);
    return $numbers;
}

$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
$today = date("Y-m-d");

if (!$birthdate) {
    echo json_encode(array('error' => '缺少参数'));
    exit;
}

$toto = generateTotoNumbers($birthdate, $today);
header('Content-Type: application/json');
echo json_encode(array('toto' => $toto));

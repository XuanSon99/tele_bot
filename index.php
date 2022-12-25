<?php
$path = "https://api.telegram.org/bot5940983546:AAFQ7g6gL_r6Tp6LG1je1fkMXHZbja9RBsk";

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/start") === 0) {
    file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in");
}

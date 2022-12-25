<!DOCTYPE html>
<html>

<body>

    <?php
    $update = json_decode(file_get_contents("php://input"), TRUE);
    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $token = '5940983546:AAFQ7g6gL_r6Tp6LG1je1fkMXHZbja9RBsk';

    if (strpos($message, "/xinchao") === 0) {
        $response = "Chào bạn, BOT có thể giúp gì? \n";

        $ch = curl_init('https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chatId . '&text=' . $response);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_close($ch);
    }
    ?>

</body>

</html>
<?php

class Telegram {

    const CHAT_ID = 518873291; //آیدی عددی
    const TOKEN = '0000000:AAEdqAahCA_TFKUNSHbQDO5InJOB8UAzJj4'; //  توکن

    public static function sendMessage($message)
    {
        $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}

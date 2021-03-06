<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 26.04.2019
 * Time: 16:48
 */

namespace loggers;
use loggers\AdapterInterface;

class TelegramAdapter implements AdapterInterface
{
    protected $chat_id;
    protected $token;

public function __construct($chat_id, $token){
    $this->chat_id = $chat_id;
    $this->token = $token;
}
    public function debug($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function info($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function notice($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function warning($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function error($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function critical($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function alert($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

    public function emergency($message)
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chat_id&text=";
        file_get_contents($url . \urlencode($message));
    }

}
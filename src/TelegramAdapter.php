<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 26.04.2019
 * Time: 16:48
 */

namespace loggers;


class TelegramAdapter implements AdapterInterface
{


    public function debug($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function info($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function notice($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function warning($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function error($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function critical($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function alert($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

    public function emergency($message)
    {
        $url = "https://api.telegram.org/bot852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4/getMe";
        file_get_contents($url . $message);
    }

}
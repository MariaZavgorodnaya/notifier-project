<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 25.04.2019
 * Time: 21:12
 */

namespace loggers;


interface AdapterInterface
{
    public function debug($message);
    public function info($message);
    public function notice($message);
    public function warning($message);
    public function error($message);
    public function critical($message);
    public function alert($message);
    public function emergency($message);
}
<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 27.04.2019
 * Time: 6:00
 */

namespace loggers;


interface NotifierObserverInterface extends AdapterInterface
{
public function add(AdapterInterface $adapter);
}
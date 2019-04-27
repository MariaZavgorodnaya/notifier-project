<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 27.04.2019
 * Time: 6:03
 */

namespace loggers;


final class NotifierObserver implements NotifierObserverInterface
{
    private $adapters = [];

    public function add(AdapterInterface $adapter)
    {
$this->adapters[] = $adapter;
    }
    public function debug($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->debug($message);
        }
    }

    public function info($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->info($message);
        }
    }

    public function notice($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->notice($message);
        }
    }

    public function warning($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->warning($message);
        }
    }

    public function error($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->error($message);
        }
    }

    public function critical($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->critical($message);
        }
    }

    public function alert($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->alert($message);
        }
    }

    public function emergency($message)
    {
        foreach($this->adapters as $adapter){
            $adapter->emergency($message);
        }
    }



}
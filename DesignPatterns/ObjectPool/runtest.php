<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-17
 * Time: 16:29
 */
use DesignPatterns\Creational\Pool\WorkerPool;
$pool = new \DesignPatterns\Creational\Pool\WorkerPool();
$worker1 = $pool->get();
$worker2 = $pool->get();
var_dump($worker1,$worker2);
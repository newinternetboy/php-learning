<?php
class He{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo crc32('');
    }

    public function __construct()
    {
        parent::__construct();
    }
}
$he = new He();
$he -> hello();
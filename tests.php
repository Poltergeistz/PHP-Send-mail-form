<?php
require './index.php';

class tests extends \PHPUnit\Framework\TestCase
{
    function test1() {
        $result = checkEmpty();
        $this->assertEquals(true,$result);
    }
}
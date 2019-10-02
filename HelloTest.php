<?php
require_once "./vendor/autoload.php";
require_once "./Hello.php";

class HelloTest extends \PHPUnit\Framework\TestCase
{

    public function testWorld()
    {
        $SUT = new Hello();
        $this->assertEquals('World', $SUT->speak());
    }

}

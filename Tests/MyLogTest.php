<?php
use chebakova\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \chebakova\MyLog::log($str));
    }
    public function providerEquation ()
    {
        return array (
            array ("test1"),
            array ("test2"),
            array (121231),
            array (true),
        );
    }
    public function testLogTex()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \chebakova\MyLog::log(null));
        $this->assertEquals('',  \chebakova\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \chebakova\MyLog::write(123));
        $this->assertEquals('',   \chebakova\MyLog::write("test"));
        $this->assertEquals('',   \chebakova\MyLog::write());
    }
}
?>
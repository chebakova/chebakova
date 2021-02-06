<?php

use chebakova\Line;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LineTest extends TestCase {
    /**
     * @dataProvider providerEquation
     */
    public function testEquation($a, $b, $res) {
        $fTest = new Line();
        $this->assertEquals($res, $fTest->equation($a, $b));
    }
    public function providerEquation ()
    {
        return array (
            array (1, 1, -1),
            array (-6, 6, 1),
            array (1000, 77, -0.077),

        );
    }
    /**
     * @dataProvider providerEquationEx
     */
    public function testEquationEx($a, $b, $res) {
        $this->expectException(\chebakova\ChebakovaException::class);
        $fTest = new Line();
        $this->assertEquals($res, $fTest->equation($a, $b));
    }
    public function providerEquationEx ()
    {
        return array (
            array (0, 1, -1),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}
?>
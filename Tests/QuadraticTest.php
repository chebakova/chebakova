<?php

use chebakova\Sqr;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuadraticTest extends TestCase {

    /**
     * @dataProvider providerSolve
     */
    public function testSolve($a, $b, $c, $res) {
        $fTest = new Sqr();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[-0.3]),
            array (1, 6, -20,[  -6.912870929175277, -5.087129070824723]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),

        );
    }
    /**
     * @dataProvider providerSolveChebEX
     */
    public function testSolveChebEX($a, $b, $c, $res) {
        $this->expectException(\chebakova\ChebakovaException::class);
        $fTest = new Sqr();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolveChebEX (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (4, 2, 1, 0),
            array ('a', 'b', 'c', 0),
        );
    }
}
?>
<?php

class ProviderTest extends \PHPUnit\Framework\TestCase {
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected) {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider() {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }
}
<?php

class ExceptionTest extends \PHPUnit\Framework\TestCase {
    /**
     * @expectedException Exception
     * @expectedExceptionCode 4000012
     * @expectedExceptionMessage 参数错误
     */
    public function testException() {
        throw  new \Exception('参数错误', 4000012);
    }

    public function test1Exception() {
        $this->expectException('\Exception');
        $this->expectExceptionCode(4000012);
        $this->expectExceptionMessage('参数错误');
        throw new \Exception('参数错误', 4000012);
    }
}
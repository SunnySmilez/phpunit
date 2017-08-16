<?php

class DependsTest extends \PHPUnit\Framework\TestCase {

    /* * * * * * * *
     *             *
     *   单个依赖   *
     *             *
     * * * * * * * */
    public function testEmpty() {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack) {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack) {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

    /* * * * * * * *
     *             *
     *   多重依赖   *
     *             *
     * * * * * * * */
    public function testProducerFirst() {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond() {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer() {
        $this->assertEquals(
            ['first', 'second'],
            func_get_args()
        );
    }
}
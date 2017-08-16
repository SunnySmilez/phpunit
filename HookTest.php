<?php

class HookTest extends \PHPUnit\Framework\TestCase {

    public function testAction() {
        echo 'test action run!' . PHP_EOL;
    }

    public function test2Action() {
        echo 'test1 action run!'. PHP_EOL;
    }

    public function setUp() {
        echo 'setUp run!'. PHP_EOL;
    }

    public function tearDown() {
        echo 'tearDown run!'. PHP_EOL;
    }

    public static function setUpBeforeClass() {
        echo 'setUpBeforeClass run!'. PHP_EOL;
    }

    public static function tearDownAfterClass() {
        echo 'tearDownAfterClass run!'. PHP_EOL;
    }
}
<?php

require_once "SomeClass.php";

class StubTest extends \PHPUnit\Framework\TestCase {

    public function testStub() {
        // 为 SomeClass 类创建桩件。
        $stub = $this->createMock(SomeClass::class);

        // 配置桩件。
        $stub->expects($this->any())->method('doSomething')->willReturn('foo');

        // 现在调用 $stub->doSomething() 将返回 'foo'。
        $this->assertEquals('foo', $stub->doSomething());
    }

    public function testMock() {
        $stub = $this->getMockBuilder('SomeClass')->disableOriginalConstructor()->getMock();

        //建立预期doSomething被执行0次或多次，返回foo值
        $stub->expects($this->any())->method('doSomething')->will($this->returnValue('foo'));

        $this->assertEquals('foo', $stub->doSomething());
    }
}
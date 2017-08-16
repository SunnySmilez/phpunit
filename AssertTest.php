<?php

/**
 * Class DemoTest
 *
 * @description 测试用例示范
 * @doc https://phpunit.de/manual/current/zh_cn/index.html
 */
class AssertTest extends \PHPUnit\Framework\TestCase {

    /* * * * * * * *
     *    布尔型    *
     * * * * * * * */
    public function testBool() {
        $this->assertTrue(true);//断言是true类型
        $this->assertFalse(false);//断言是false类型
        $this->assertInternalType('bool', true);//断言是bool类型
    }

    /* * * * * * * *
     *    NULL 型  *
     * * * * * * * */
    public function testNull() {
        $this->assertNull(null);//断言是null
        $this->assertNotNull(array());//断言不是null
    }

    /* * * * * * * *
     *             *
     *   数字类型   *
     *             *
     * * * * * * * */
    public function testNumber() {
        $a = 1;
        $b = 2;

        $this->assertEquals(1, $a);//断言相等
        $this->assertNotEquals($a, $b);//断言不相等
        $this->assertGreaterThan($a, $b);//断言$b大于$a
        $this->assertGreaterThanOrEqual($a, $b);//断言$b大于等于$a
        $this->assertLessThan($b, $a);//断言$a小于$b
        $this->assertLessThanOrEqual($b, $a);//断言$a小于等于$b
        $this->assertInternalType('int', 1);//断言是int类型
        $this->assertSame(12, 12);//断言类型和值都相等
        $this->assertNotSame(12, '12');//断言类型和值有一个不相等
    }

    /* * * * * * * *
     *             *
     *   字符串类型 *
     *             *
     * * * * * * * */
    public function testString() {
        $this->assertEquals('aa', 'aa');//断言两个字符串相等
        $this->assertNotEquals('aa', 'bb');//断言两个字符创不相等
        $this->assertContains('c', 'abc');//断言字符串包含在另外一个字符串中
        $this->assertNotContains('d', 'abc');//断言字符串不包含在另外一个字符串中
        $this->assertContainsOnly('string', array('3'));//断言只包含string类型
        $this->assertNotContainsOnly('string', array('aaa', 11));//断言不仅仅包含string类型
        $this->assertInternalType('string', '11');//断言是string类型
        $this->assertJsonStringEqualsJsonString("[1]", "[1]");//断言json字符串相等
        $this->assertSame('12', '12');//断言类型和值都相等
        $this->assertNotSame(12, '12');//断言类型和值有一个不相等
        $this->assertStringEndsWith('1', '121');//断言字符串：121 是以1开头
    }

    /* * * * * * * *
     *             *
     *    数组类型  *
     *             *
     * * * * * * * */
    public function testArray() {
        $data = array(
            'age'=>12,
            'name'=>'测试'
        );

        $this->assertEquals(array(1), array('1'));//断言两个数组相等
        $this->assertNotEquals(array(1), array(1, 2));//断言两个数组不相等
        $this->assertArrayHasKey('name', $data);//断言data中存在key为name
        $this->assertArrayNotHasKey('gender', $data);//断言数组data中不存在key为gender
        $this->assertContains(12, $data);//断言data中包含12
        $this->assertNotContains(11, $data);//断言data中不包含11
        $this->assertContainsOnly('array', array(array(1)));//断言包含数组
        $this->assertNotContainsOnly('array', array(1, array(1)));//断言不仅仅包含数组(实际上不包含数组也可以)
        $this->assertArraySubset(array(1, 2), array(1, 2, 3));//断言数组中是否包含另外一个数组，类似于in_array
        $this->assertCount(1, array(1));//断言数组元素个数
        $this->assertEmpty(array());//断言数组为空
        $this->assertNotEmpty(array(1));//断言数组不为空
        $this->assertInternalType('array', array(1));//断言类型是数组
        $this->assertSame(array(1), array(1));//断言类型或值相等
        $this->assertNotSame(array(1), array('1'));//断言类型或值不相等
    }
}
<?php

namespace Tests\Unit;

use Cyaxaress\User\Rules\ValidMobile;
use PHPUnit\Framework\TestCase;

class MobileValidationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_mobile_can_not_be_less_10_character()
    {
        $result=(new ValidMobile())->passes('','091369472');
        $this->assertEquals(0,$result);
    }

    public function test_mobile_can_not_be_more_12_character()
    {
        $result=(new ValidMobile())->passes('','0913694781233');
        $this->assertEquals(0,$result);
    }

}

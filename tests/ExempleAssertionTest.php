<?php declare (strict_types = 1);

use PHPUnit\Framework\TestCase;

class ExempleAssertionTest extends TestCase
{

    public function testAssertionName()
    {
        $string1 = "string";
        $string2 = "string";

        $string3 = "String";

        $this->assertSame($string1,$string2);

        // $this->assertSame($string1, $string3);

    }

    public function testCondionAddUp()
    {
        
        $this->assertEquals(10, 5 + 5);
        
    }
}

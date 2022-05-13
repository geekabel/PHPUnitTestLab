<?php declare (strict_types = 1);

use PHPUnit\Framework\TestCase;
require "Rationnel.php";
class RationnelAssertionTest extends TestCase
{

    public function testAdditionRationnel() {
        $a = new Rationnel(2,3);
        $b = new Rationnel(1,2);
        // $a->addition($b);
        $b->addition($a);
        $this->assertEquals(7,$b->getNumerateur());
        $this->assertEquals(6,$b->getDenominateur());
    }

    public function testSoustraction(){
        $a = new Rationnel(2,3);
        $b = new Rationnel(1,2);
        // $a->addition($b);
        $b->soustraction($a);
        $this->assertEquals(-1,$b->getNumerateur());
        $this->assertEquals(6,$b->getDenominateur());
    }

    // public function testSoustractionVariante(){
    //     $res = gmp_gcd("9","6");
    //     $this->assertEquals(3, $res);
    // }

    public function testMultiplication(){
        $a = new Rationnel(2,3);
        $b = new Rationnel(1,2);
        // $a->addition($b);
        $b->multiplication($a);
        $this->assertEquals(2,$b->getNumerateur());
        $this->assertEquals(6,$b->getDenominateur());
    }

    public function testDivision(){
        $a = new Rationnel(2,3);
        $b = new Rationnel(1,2);
        // $a->addition($b);
        $a->division($b);
        $this->assertEquals(4,$a->getNumerateur());
        $this->assertEquals(3,$a->getDenominateur());
    }
    
}

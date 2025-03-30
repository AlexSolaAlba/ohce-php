<?php

namespace Deg540\Ohce\Test;

use PHPUnit\Framework\TestCase;
use Deg540\Ohce\Ohce;

class OhceTest extends TestCase
{   // TODO: String Calculator Kata Tests
    private Ohce $ohce;

    protected function setUp() : void
    {
        parent::setUp();
        $this->ohce = new Ohce();
    }


    /**
    * @test
    */
    public function given6AndNameReturnsBuenosDias() : void
    {
        $returnValue = $this->ohce->Greetings(6,"ale");
        $this->assertEquals("Buenos dias ale",$returnValue);
    }

    /**
     * @test
     */
    public function given12AndNameReturnsBuenosDias() : void
    {
        $returnValue = $this->ohce->Greetings(12,"ale");
        $this->assertEquals("Buenas tardes ale",$returnValue);
    }

    /**
     * @test
     */
    public function given20AndNameReturnsBuenosDias() : void
    {
        $returnValue = $this->ohce->Greetings(20,"ale");
        $this->assertEquals("Buenas noches ale",$returnValue);
    }

    /**
     * @test
     */
    public function givenANotPalindromeWordReturnsNothing() : void
    {
        $returnValue = $this->ohce->CheckPalindrome("ale");
        $this->assertEquals("",$returnValue);
    }

    /**
     * @test
     */
    public function givenAPalindromeWordReturnsBonitaPalabra() : void
    {
        $returnValue = $this->ohce->CheckPalindrome("ala");
        $this->assertEquals("Bonita palabra",$returnValue);
    }

    /**
     * @test
     */
    public function givenStopReturnsAdios() : void
    {
        $returnValue = $this->ohce->Stop("Stop");
        $this->assertEquals("Adios",$returnValue);
    }
}
<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Fractionneur\FractionneurDesPrimesBrutes as FPB;

class FractionneurDePrimesBrutesTest extends TestCase
{
    protected $fractionneur;

    public function setUp()
    {
        $this->fractionneur = new FPB();
    }

    public function testDefenseEtRecours()
    {
        $r = $this->fractionneur->defenseEtRecours(1,14,'E',20,8,1,6);
        $this->assertEquals(3975,$r);
    }

    public function testIncendie()
    {
        $r = $this->fractionneur->incendie(1,1,6000000,6);
        $this->assertEquals(10500,$r);        
    }

    public function testVolVolAgressionEtVolAccessoires()
    {
        $r = $this->fractionneur->volVolAgressionEtVolAccessoires(1,6000000);
        return $this->assertEquals(45000,$r);
    }

    public function testBrisDeGlaces()
    {
        $r = $this->fractionneur->brisDeGlaces(1,20000000,6);
        return $this->assertEquals(22500,$r);
    }

    public function testAvanceSurRecours()
    {
        $r = $this->fractionneur->avanceSurRecours(6);
        return $this->assertEquals(7500,$r);
    }
    
    public function testIndPersonnesTransportee()
    {
        $r = $this->fractionneur->indPersonnesTransportees(5,1,6);
        return $this->assertEquals(2950,$r);
    }
}

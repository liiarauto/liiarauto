<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use LiiarAuto\Http\Controllers\Assurance\GarantiesController as GarantiesController;
use LiiarAuto\Http\Controllers\Assurance\PrimesBrutesController as PrimesBrutesController;

class GarantiesTest extends TestCase
{
    protected $primesBrutes;

    public function setUp()
    {
        $this->primesBrutes = new PrimesBrutesController();
    }

    public function testResponsabilitCivile()
    {
        $rc = $this->primesBrutes->rC(1,14,'E',20,8,1);
        $this->assertEquals(129058,$rc);
    }
    
    public function testDefenseEtRecours()
    {
        $r = $this->primesBrutes->defenseEtRecours(1);
        $this->assertEquals(7500,$r);
    }

    public function testIncendie()
    {
        $r = $this->primesBrutes->incendie(1,1,6000000);
        $this->assertEquals(21000,$r);
    }

    public function testVolVolAgressionEtVolAccessoires()
    {
        $r = $this->primesBrutes->volVolAgressionEtVolAccessoires(1,6000000);
        $this->assertEquals(45000,$r);
    }

    public function testBrisDeGlace()
    {
        $r = $this->primesBrutes->brisDeGlaces(1,20000000);
        $this->assertEquals(45000,$r);
    }

    public function testIndPersonnesTransportees()
    {
        $r = $this->primesBrutes->indPersonnesTransportees(5,1);
        $this->assertEquals(5900,$r);
    }
}

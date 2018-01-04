<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use LiiarAuto\Http\Controllers\Assurance\PrimesFractionneesController as PrimesFractionneesController;

class PrimesFractionneesTest extends TestCase
{
    protected $primesFractionnees;
    
    public function setUp()
    {
        $this->primesFractionnees = new PrimesFractionneesController();
    }

    public function testRC()
    {
        $r = $this->primesFractionnees->rC(1,14,'E',20,5,1,6);
        return $this->assertEquals(68401,$r);
    }
    
    public function testDefenseEtRecours()
    {
        $r = $this->primesFractionnees->defenseEtRecours(1,14,'E',20,5,1,6);
        return $this->assertEquals(3975,$r);
    }

    public function testIncendie()
    {
        $r = $this->primesFractionnees->incendie(1,1,6000000,6);
        $this->assertEquals(10500,$r);
    }

    /**
     * Non operationnelle
     * Activer en ajoutant le suffix test
     */
    public function testVolVolAgressionEtVolAccessoires()
    {
        $r = $this->primesFractionnees->volVolAgressionEtVolAccessoires(1,6000000,6);
        return $this->assertEquals(22500,$r);
    }

    public function testBrisDeGlaces()
    {
        $r = $this->primesFractionnees->brisDeGlaces(1,20000000,6);
        return $this->assertEquals(22500,$r);
    }

    public function testAvanceSurRecours()
    {
        $r = $this->primesFractionnees->avanceSurRecours(6);
        return $this->assertEquals(7500,$r);
    }
    
}

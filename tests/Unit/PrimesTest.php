<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use LiiarAuto\Http\Controllers\Assurance\GarantiesController as GarantiesController;
use LiiarAuto\Http\Controllers\Assurance\PrimesController as PrimesController;
use LiiarAuto\Http\Controllers\Assurance\DevisController as DevisController;

class PrimesTest extends TestCase
{
    protected $garanties;
    protected $devis;
    protected $primes;
    
    public function setUp()
    {
        $this->garanties = new GarantiesController();
        $this->primes = new PrimesController();
        $this->devis = new DevisController();
    }

    /**
     * @param Categorie
     * @param Puissance
     * @param Energie
     * @param ChargeUtile
     * @param nbPersonnes
     * @param Zone
     */
    public function testResponsabilitCivile()
    {
        $rc = $this->primes->responsabiliteCivile(1,14,'E',20,8,1);
        $this->assertEquals(129058,$rc);
    }
}

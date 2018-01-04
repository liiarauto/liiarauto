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
}

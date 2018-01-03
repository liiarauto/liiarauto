<?php

namespace Tests\Unit;

use Tests\TestCase;
use LiiarAuto\Http\Controllers\Assurance\GarantiesController as GarantiesController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GarantiesTest extends TestCase
{
    protected $garanties;

    // public function setUpBeforeClass()
    public function setUp()
    {
        $this->garanties = new GarantiesController();
    }

    public function testDefenseEtRecours()
    {
        $r = $this->garanties->defenseEtRecours(1);
        $this->assertEquals(7500,$r);
    }

    public function testIncendie()
    {
        $r = $this->garanties->incendie(1,1,6000000);
        $this->assertEquals(21000,$r);
    }

    public function testVolVolAgressionEtVolAccessoires()
    {
        $r = $this->garanties->volVolAgressionEtVolAccessoires(1,6000000);
        $this->assertEquals(45000,$r);
    }

    public function testBrisDeGlace()
    {
        $r = $this->garanties->brisDeGlace(1,20000000);
        $this->assertEquals(45000,$r);
    }

    public function testIndPersonnesTransportees()
    {
        $r = $this->garanties->indPersonnesTransportees(5,1);
        $this->assertEquals(5900,$r);
    }
}

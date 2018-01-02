<?php

namespace Tests\Unit;

use Tests\TestCase;
use LiiarAuto\Http\Controllers\GarantiesController as GarantiesController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GarantiesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIncendie()
    {
        $g = new GarantiesController();
        $r = $g->incendie(1,1,6000000);
        $this->assertEquals($r,210020);
    }
}

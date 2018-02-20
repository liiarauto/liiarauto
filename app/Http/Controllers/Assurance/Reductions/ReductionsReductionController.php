<?php

namespace LiiarAuto\Http\Controllers\Assurance\Reductions;

use Illuminate\Http\Request;

class PermisReductionController extends Controller
{
    protected $devis;

    public function __construct()
    {
        $this->devis = new DevisController();
        $this->garanties = new GarantiesController();
    }
}

<?php

namespace LiiarAuto\Http\Controllers\Assurance;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;

use LiiarAuto\Http\Controllers\Assurance\DevisController as DevisController;

class PrimesController extends Controller
{
    protected $devis;

    public function __construct()
    {
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
    public function responsabiliteCivile($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone)
    {
        return $this->devis->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone);
    }
}

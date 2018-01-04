<?php

namespace LiiarAuto\Http\Controllers\Assurance;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;

use LiiarAuto\Http\Controllers\Assurance\DevisController as DevisController;
use LiiarAuto\Http\Controllers\Assurance\Outils\FractionneurDesPrimesBrutes as FPB;



class PrimesFractionneesController extends Controller
{
    protected $fractionneur;
    protected $devis;

    public function __construct()
    {
        $this->fractionneur = new FPB();
        $this->devis = new DevisController();
    }

    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function rC($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois)
    {
        $rcCat01 = $this->devis->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone);
        $fractionPrime = $this->devis->fractionPrime($nbMois);

        return $this->fractionneur->rC($rcCat01, $fractionPrime);
    }
}

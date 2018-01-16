<?php

namespace LiiarAuto\Http\Controllers\Assurance\Base;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;

use LiiarAuto\Http\Controllers\Assurance\Base\DevisController as DevisController;
use LiiarAuto\Http\Controllers\Assurance\Base\GarantiesController as GarantiesController;

class PrimesBrutesController extends Controller
{
    protected $devis;

    public function __construct()
    {
        $this->devis = new DevisController();
        $this->garanties = new GarantiesController();
    }
    
    public function rC($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone)
    {
        return $this->devis->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone);
    }

    public function defenseEtRecours($categorie, $rcCat01=null, $fractionPrime=null)
    {
        return $this->garanties->defenseEtRecours($categorie, $rcCat01, $fractionPrime);
    }

    public function incendie($categorie, $sousCategorie=1, $valeurVenale)
    {
        return $this->garanties->incendie($categorie, $sousCategorie, $valeurVenale);
    }

    public function volVolAgressionEtVolAccessoires($categorie, $valeurVenale)
    {
        return $this->garanties->volVolAgressionEtVolAccessoires($categorie, $valeurVenale);
    }

    public function brisDeGlaces($categorie, $valeurNeuve)
    {
        return $this->garanties->brisDeGlaces($categorie, $valeurNeuve);
    }

    public function avanceSurRecours()
    {
        return $this->garanties->avanceSurRecours();
    }

    public function indPersonnesTransportees($nbPlace, $formule=1)
    {
        return $this->garanties->indPersonnesTransportees($nbPlace, $formule);
    }
}

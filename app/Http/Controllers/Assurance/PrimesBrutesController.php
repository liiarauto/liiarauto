<?php

namespace LiiarAuto\Http\Controllers\Assurance;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;

use LiiarAuto\Http\Controllers\Assurance\DevisController as DevisController;
use LiiarAuto\Http\Controllers\Assurance\GarantiesController as GarantiesController;

class PrimesBrutesController extends Controller
{
    protected $devis;

    public function __construct()
    {
        $this->devis = new DevisController();
        $this->garanties = new GarantiesController();
    }

    /**
     * @param Categorie
     * @param Puissance
     * @param Energie
     * @param ChargeUtile
     * @param nbPersonnes
     * @param Zone
     */
    public function responsabiliteCivile($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone,$conduite=null,$profession=null)
    {
        $rcCat1=$this->devis->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone);
        $reductionPermis=$this->devis->reductionConducteur($rcCat1,$conduite);
        $reductionProfession=$this->devis->reductionProfession($rcCat1,$profession);

        $reduction=$reductionPermis + $reductionProfession;

        return $rcCat1-$reduction;
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

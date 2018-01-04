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
    
    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function defenseEtRecours($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois)
    {
        return $this->fractionneur->defenseEtRecours($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois);
    }

    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function incendie($categorie, $sousCategorie=1, $valeurVenale, $nbMois)
    {
        return $this->fractionneur->incendie($categorie,$sousCategorie,$valeurVenale,$nbMois);
    }

    /**
     * Données manqunantes
     */
    public function volVolAgressionEtVolAccessoires($categorie,$valeurVenale)
    {

    }

    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function brisDeGlaces($categorie, $valeurNeuve, $nbMois)
    {
        return $this->fractionneur->brisDeGlaces($categorie,$valeurNeuve,$nbMois);
    }

    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function avanceSurRecours($nbMois)
    {
        return $this->fractionneur->avanceSurRecours($nbMois);
    }

    public function indPersonnesTransportees($nbPlaces, $formule=1, $nbMois)
    {
        return $this->fractionneur->indPersonnesTransportees($nbPlaces, $formule=1, $nbMois);
    }
}

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
    protected $primeBrutes;

    public function __construct()
    {
        $this->primeBrutes=new PrimesBrutesController();
        $this->fractionneur = new FPB();
        $this->devis = new DevisController();
    }

    /**
     * Fonctionnelité Collegue non prise en compte
     */
    public function rC($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois,$conduite,$profession)
    {
        $rcCat01 = $this->primeBrutes->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone,$conduite,$profession);
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
     * Incomplet, juste une partie implémentée
     * Données manqunantes
     */
    public function volVolAgressionEtVolAccessoires($categorie,$valeurVenale,$nbMois)
    {
        $vol = $this->fractionneur->volVolAgressionEtVolAccessoires($categorie,$valeurVenale);
        // return 0.5*$vol*$nbMois/12; Donnée manquante
        return $vol*$nbMois/12; //Tatif!F18 = FAUX. Oui, mais??
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

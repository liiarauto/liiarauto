<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Fractionneur;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller;
use LiiarAuto\Http\Controllers\Assurance\Base\DevisController as Devis;
use LiiarAuto\Http\Controllers\Assurance\Base\PrimesBrutesController as PrimesBrutes;

/**
 * Cette classe représente la colonne AE et ses calculs
 * 
 * Note: les fonctionnalités
 * Car-Stop et Collegue ne sont pas nécessaires
 * car la saisie n'est pas faite chez l'assureur
 */
class FractionneurDesPrimesBrutes extends Controller
{
    protected $devis;
    protected $primesBrutes;

    public function __construct()
    {
        $this->devis = new Devis();
        $this->primesBrutes = new PrimesBrutes();
    }

    public function rC($rcCat01, $fractionPrime)
    {
        return ceil($rcCat01 * $fractionPrime);
    }

    /**
     * Formules de produits non prise en compte
     */
    public function defenseEtRecours($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone, $nbMois)
    {
        $rcCat01 = $this->devis->rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone);
        $fractionPrime = $this->devis->fractionPrime($nbMois);

        $rc = $this->rC($rcCat01, $nbMois);

        if($categorie==3)
        {
            return ceil((($rc*10)/100)*$nbMois/12);
        }
        elseif($categorie==5)
        {
            return ceil(3000*$nbMois/12);
        }
        else
        {
            return ceil(7950*$nbMois/12);
        }
    }

    public function incendie($categorie, $sousCategorie=1, $valeurVenale, $nbMois)
    {
        $primeBruteIncendie = $this->primesBrutes->incendie($categorie, $sousCategorie=1, $valeurVenale);
        return ceil($primeBruteIncendie*$nbMois/12);
    }

    /**
     * Le cas de Car-Stop n'est pas pris en compte
     * Le cas de Collegue n'est pas pris en compte
     */
    public function volVolAgressionEtVolAccessoires($categorie, $valeurVenale)
    {
        $primeBruteVol = $this->primesBrutes->volVolAgressionEtVolAccessoires($categorie, $valeurVenale);
        return $primeBruteVol;
    }

    /**
     * Fonctionnalités de Formules non prises en compte
     */
    public function brisDeGlaces($categorie, $valeurNeuve, $nbMois)
    {
        $primeBruteBDG = $this->primesBrutes->brisDeGlaces($categorie, $valeurNeuve);
        return ceil($primeBruteBDG*$nbMois/12);
    }

    /**
     * Fonctionnalités de Formules non prises en compte
     */
    public function avanceSurRecours($nbMois)
    {
        $primeBruteASR = $this->primesBrutes->avanceSurRecours();
        return ceil($primeBruteASR*$nbMois/12);
    }

    /**
     * 
     */
    public function indPersonnesTransportees($nbPlaces, $formule=1, $nbMois)
    {
        $primeBruteIPT = $this->primesBrutes->indPersonnesTransportees($nbPlaces, $formule);
        return ceil($primeBruteIPT*$nbMois/12);
    }
}

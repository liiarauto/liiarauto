<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;

class GarantiesController extends Controller
{
    protected $devis;
    //

    public function __construct()
    {
        $this->devis = new DevisController();
    }

    public function incendie($categorie, $sousCategorie, $valeurVenale)
    {
        $incendieExplosion = $this->devis->incendieExplosion($categorie, $sousCategorie, $valeurVenale);

        if($incendieExplosion < 10000)
            return 10000;
        else
            return $incendieExplosion;
    }

    public function volVolAgressionEtVolAccessoires($categorie, $valeurVenale)
    {
        $volVolAgression = $this->devis->volVolAgression($categorie, $valeurVenale);

        if($volVolAgression < 20000)
            return 20000;
        else
            return $volVolAgression;
    }

    public function brisDeGlace($categorie, $valeurNeuve)
    {
        $brisDeGlace = $this->devis->brisDeGlace($categorie, $valeurNeuve);

        if($brisDeGlace < 10000)
            return 10000;
        else
            return $brisDeGlace;
    }
}

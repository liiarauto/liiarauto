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
}

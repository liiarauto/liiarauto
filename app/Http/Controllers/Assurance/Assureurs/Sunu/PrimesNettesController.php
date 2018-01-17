<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;
//use LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Fractionneur\FractionneurDesPrimesBrutes as FPB;

class PrimesNettesController extends Controller
{
    /*protected $fractionneur;

    public function __construct()
    {
        $this->fractionneur = new FPB();
    }*/

    /**
     * Certains paranetres ici sont à recupérer de la DB
     */
    public function rC($rcFractionnee,$redProfession,$redFlotte,$redBNS)
    {
        return ceil($rcFractionnee*(1-$redProfession)*(1-$redFlotte)*(1-$redBNS)*(1-$redFlotte));
    }

    public function defenseEtRecours($defFractionnee,$redProfession,$redFlotte,$redBNS)
    {
        return ceil($defFractionnee*(1-$redProfession)*(1-$redFlotte)*(1-$redBNS)*(1-$redFlotte));
    }

    public function incendie($incendieFractionnee,$redProfession,$redBNS,$redCOM,$redPermis)
    {
        return ceil($incendieFractionnee*(1-$redProfession)*(1-$redBNS)*(1-$redCOM)*(1-$redPermis));
    }

    public function volVolAgressionEtVolAccessoires($volFractionnee,$redProfession,$redBNS,$redCOM,$redPermis)
    {
        return ceil($volFractionnee*(1-$redProfession)*(1-$redBNS)*(1-$redCOM)*(1-$redPermis));
    }
    
    public function brisDeGlaces($brisFractionnee,$redProfession,$redBNS,$redCOM,$redPermis)
    {
        return ceil($brisFractionnee*(1-$redProfession)*(1-$redBNS)*(1-$redCOM)*(1-$redPermis));
    }

    public function avanceSurRecours($avanceFractionnee,$redProfession,$redBNS,$redCOM,$redPermis)
    {
        return ceil($avanceFractionnee*(1-$redProfession)*(1-$redBNS)*(1-$redCOM)*(1-$redPermis));
    }

    public function indPersonnesTransportees($indFractionnee)
    {
        return $indFractionnee;
    }


}

<?php

namespace LiiarAuto\Http\Controllers\Assurance\Base;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;
use LiiarAuto\Http\Controllers\Assurance\Base\DevisController as DevisController;

class GarantiesController extends Controller
{
    protected $devis;
    //

    public function __construct()
    {
        $this->devis = new DevisController();
    }

    /**
     * Tarif en cas de Formule non pris en compte
     */
    public function defenseEtRecours($categorie, $rcCat01=null, $fractionPrime=null)
    { 
        if($categorie==3)
        {
            $primeFractionnee = $this->devis->primeFractionnee($rcCat01, $fractionPrime);
            return ($primeFractionnee * 10)/100;
        }
        elseif($categorie==5)
        {
            return 3000;
        }
        else 
        {
            return 7500;
        }
    }

    public function incendie($categorie, $sousCategorie=1, $valeurVenale)
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

    public function brisDeGlaces($categorie, $valeurNeuve)
    {
        $brisDeGlace = $this->devis->brisDeGlace($categorie, $valeurNeuve);

        if($brisDeGlace < 10000)
            return 10000;
        else
            return $brisDeGlace;
    }

    public function avanceSurRecours()
    {
        return 15000;
    }
    
    public function indPersonnesTransportees($nbPlace, $formule=1)
    {
        return $this->devis->personnesTransportees($nbPlace, $formule);
    }
}

<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu;

use Illuminate\Http\Request;
use LiiarAuto\Http\Controllers\Controller as Controller;

class BilanController extends Controller
{
    private $fga = 0.02;
    private $cedeao = 1000;
    private $taxes = 0.145;
    private $accessoires = 2500;
    private $bilan;
    private $sommeFractionnee;
    private $sommeNette;

    public function __construct()
    {
        $this->bilan = array();
        $this->bilan['somme_primes_fractionnees'] = 0;
        $this->bilan['somme_primes_nettes'] = 0;
        $this->bilan['accessoires'] = 0;
        $this->bilan['cedeao'] = $this->cedeao;
    }

    public function sommeFractionnee($primeFactionnee)
    {
        $this->bilan['somme_primes_fractionnees'] += $primeFactionnee;
    }

    public function sommeNette($primeNette)
    {
        $this->bilan['somme_primes_nettes'] += $primeNette;
    }

    public function setAccessoires($categorie,$nbMois)
    {
        if($categorie==5)
        {
            $this->bilan['accessoires'] =  500 + $this->accessoires;
        }
        else
        {
            if($nbMois<=3)
            {
                $this->bilan['accessoires'] =  2500 + $this->accessoires;
            }
            else
            {
                if($nbMois>3 && $nbMois<=6)
                {
                    $this->bilan['accessoires'] =  5000 + $this->accessoires;
                }
                else
                {
                    if($nbMois>6 && $nbMois<=12)
                    {
                        $this->bilan['accessoires'] =  10000 + $this->accessoires;
                    }
                    else
                    {
                        $this->bilan['accessoires'] =  15000 + $this->accessoires;
                    }
                }
            }
        }
    }

    /**
     * Fond de garantie auto
     */
    public function setFga($rcNette)
    {
        $this->bilan['fga'] = ceil($rcNette * $this->fga);
    }

    /**
     * Assuré exonéré de taxe non pris en charge
     */
    private function getTaxes()
    {
        $this->bilan['taxes'] = ceil(($this->bilan['accessoires'] + $this->bilan['somme_primes_nettes']) * $this->taxes);
    }

    private function getPrimeTTC()
    {
        $ttc = 0;
        $ttc += $this->bilan['somme_primes_nettes'];
        $ttc += $this->bilan['accessoires'];
        $ttc += $this->bilan['taxes'];
        $ttc += $this->bilan['fga'];
        $ttc += $this->bilan['cedeao'];
        $this->bilan['primettc'] = $ttc;
    }

    public function getBilan()
    {
        $this->getTaxes();
        $this->getPrimeTTC();
        return $this->bilan;
    }


}

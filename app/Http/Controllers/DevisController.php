<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonne, $zone)
    {
        
    }

    public function fractionPrime($nbMois)
    {
        if (0.5<=$nbMois && $nbMois<=1) { return 0.1; }
        if (1.1<=$nbMois && $nbMois<=2) { return 0.19; }
        if (2.1<=$nbMois && $nbMois<=3) { return 0.28; }
        if (3.1<=$nbMois && $nbMois<=4) { return 0.37; }
        if (4.1<=$nbMois && $nbMois<=5) { return 0.45; }
        if (5.1<=$nbMois && $nbMois<=6) { return 0.53; }
        if (6.1<=$nbMois && $nbMois<=7) { return 0.61; }
        if (7.1<=$nbMois && $nbMois<=8) { return 0.69; }
        if (8.1<=$nbMois && $nbMois<=9) { return 0.77; }
        if (9.1<=$nbMois && $nbMois<=10) { return 0.85; }
        if (10.1<=$nbMois && $nbMois<=11) { return 0.93; }
        if (11.1<=$nbMois && $nbMois<=9999999) { return 1; }
    }

    public function valeurVenale($categorie, $age, $valeurNeuve, $chargeUtile)
    {
        switch ($categorie)
        {
            case 1:
            case 10:
            case 12:
                {
                    if (0<=$age && $age<0.4) { return 1 * $valeurNeuve; }
                    elseif (0.5<=$age && $age<=0.9999) { return 0.825 * $valeurNeuve; }
                    elseif (1<=$age && $age<=1.4) { return 0.75 * $valeurNeuve; }
                    elseif (1.5<=$age && $age<=1.9999) { return 0.65 * $valeurNeuve; }
                    elseif (2<=$age && $age<=2.4) { return 0.6 * $valeurNeuve; }
                    elseif (2.5<=$age && $age<=2.9999) { return 0.5 * $valeurNeuve; }
                    elseif (3<=$age && $age<=3.4) { return 0.45 * $valeurNeuve; }
                    elseif (3.5<=$age && $age<=3.9999) { return 0.4 * $valeurNeuve; }
                    elseif (4<=$age && $age<=3.4) { return 0.35 * $valeurNeuve; }
                    elseif (4.5<=$age && $age<=4.9999) { return 0.325 * $valeurNeuve; }
                    elseif (5<=$age && $age<=5.4) { return 0.3 * $valeurNeuve; }
                    elseif (5.5<=$age && $age<=5.9999) { return 0.275 * $valeurNeuve; }
                    elseif (6<=$age && $age<=6.4) { return 0.25 * $valeurNeuve; }
                    elseif (6.5<=$age && $age<=6.9999) { return 0.225 * $valeurNeuve; }
                    elseif (7<=$age && $age<=7.9999) { return 0.2 * $valeurNeuve; }
                    elseif (8<=$age && $age<=8.9999) { return 0.175 * $valeurNeuve; }
                    elseif (9<=$age && $age<=9.9999) { return 0.15 * $valeurNeuve; }
                    elseif (10<=$age && $age<=999999) { return 0.1 * $valeurNeuve; }
                    break;
                }
            case 2:
            case 3:
                {
                    // if ($chargeUtile <= 2.5)
                    if ($chargeUtile <= 5)
                    {
                        if (0<=$age && $age<=0.5) { return 1 * $valeurNeuve; }
                        elseif (0.6<=$age && $age<=0.09) { return 0.65 * $valeurNeuve; }
                        elseif (1.1<=$age && $age<=2.09) { return 0.5 * $valeurNeuve; }
                        elseif (2.1<=$age && $age<=3.09) { return 0.35 * $valeurNeuve; }
                        elseif (3.1<=$age && $age<=4.09) { return 0.3 * $valeurNeuve; }
                        elseif (4.1<=$age && $age<=5.09) { return 0.25 * $valeurNeuve; }
                        elseif (5.1<=$age && $age<=6.09) { return 0.2 * $valeurNeuve; }
                        elseif (6.1<=$age && $age<=99999999) { return 0.15 * $valeurNeuve; }
                    }
                    if (5<$chargeUtile && $chargeUtile<=10)
                    {
                        if (0<=$age && $age<=0.5) { return 1 * $valeurNeuve; }
                        elseif (0.6<=$age && $age<=0.09) { return 0.7 * $valeurNeuve; }
                        elseif (1.1<=$age && $age<=2.09) { return 0.5 * $valeurNeuve; }
                        elseif (2.1<=$age && $age<=3.09) { return 0.4 * $valeurNeuve; }
                        elseif (3.1<=$age && $age<=4.09) { return 0.3 * $valeurNeuve; }
                        elseif (4.1<=$age && $age<=5.09) { return 0.25 * $valeurNeuve; }
                        elseif (5.1<=$age && $age<=6.09) { return 0.2 * $valeurNeuve; }
                        elseif (6.1<=$age && $age<=99999999) { return 0.15 * $valeurNeuve; }
                    }
                    if (10<$chargeUtile)
                    {
                        if (0<=$age && $age<=0.5) { return 1 * $valeurNeuve; }
                        elseif (0.6<=$age && $age<=0.09) { return 0.7 * $valeurNeuve; }
                        elseif (1.1<=$age && $age<=2.09) { return 0.65 * $valeurNeuve; }
                        elseif (2.1<=$age && $age<=3.09) { return 0.4 * $valeurNeuve; }
                        elseif (3.1<=$age && $age<=4.09) { return 0.3 * $valeurNeuve; }
                        elseif (4.1<=$age && $age<=5.09) { return 0.25 * $valeurNeuve; }
                        elseif (5.1<=$age && $age<=6.09) { return 0.2 * $valeurNeuve; }
                        elseif (6.1<=$age && $age<=99999999) { return 0.15 * $valeurNeuve; }
                    }
                }
        }
    }

    public function bris2Glace($categorie, $valeurNeuve)
    {
        switch ($categorie)
        {
            case 1:
            case 2:
            case 3:
            case 10:
            case 12:
                return 0.00225 * $valeurNeuve;
                break;
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                return 0;
                break;
        }
    }

    public function personneTransportee($nbPlace, $formule)
    {
        switch ($nbPlace)
        {
            case 2:
            case 3:
            case 4:
            case 5:
                {
                    switch ($formule)
                    {
                        case 1:
                            return 5900;
                            break;
                        case 2:
                            return 8700;
                            break;
                        case 3:
                            return 10000;
                            break;
                        case 4:
                            return 14500;
                            break;
                    }
                }
                break;
        }

        if($nbPlace > 5)
        {
            switch ($formule)
            {
                case 1:
                    return 5900 + ($nbPlace - 5) * 1120;
                    break;
                case 2:
                    return 8700 + ($nbPlace - 5) * 1800;
                    break;
                case 3:
                    return 10000 + ($nbPlace - 5) * 2000;
                    break;
                case 4:
                    return 14500 + ($nbPlace - 5) * 3000;
                    break;
            }
        }
    }

    public function incendieExplosion($categorie, $sousCategorie, $valeurVenale)
    {
        switch ($categorie)
        {
            case 1:
            case 2:
            case 3:
            case 7:
            case 10:
            case 12:
                return 0.0035 * $valeurVenale;
                break;
            
            case 4:
            case 5:
            case 6:
                return 0;
                break;
        }
    }

    public function volVolAgression($categorie, $valeurVenale)
    {
        switch($categorie)
        {
            case 1:
            case 2:
            case 3:
            case 7:
            case 8:
            case 9:
            case 10:
            case 12:
                return 0.0075 * $valeurVenale;
        }
    }

    public function toutRisque($age, $categorie, $valeurNeuve)
    {
        if(in_array($age,[0,1,2,3,4,5]))
        {
            switch($categorie)
            {
                case 1:
                case 2:
                case 3:
                case 9:
                case 10:
                case 12:
                    return 0.048 * $valeurNeuve;
                    break;
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                    return 0;
                    break;
            }
        }

        if(in_array($age, range(5.1,99,0.1)))
        {
            switch($categorie)
            {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 12:
                    return 0;
                    break;
            }
        }
    }
    
    public function tierceCollision($categorie, $sousCategorie, $valeurNeuve)
    {
        $coefficient;
        switch($categorie)
        {
            case 1:
            case 2:
            case 3:
            case 9:
            case 10:
            case 12:
                return 0.4 * $valeurNeuve;
                break;
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
                return 0;
                break;
        }
    }
}

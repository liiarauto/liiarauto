<?php

namespace LiiarAuto\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function rcCat01($categorie, $puissance, $energie, $chargeUtile, $nbPersonne, $zone)
    {
        if($zone=1)
        {
            switch ($categorie) {
                case 1:
                    if ($energie=="E")
                    {
                        if (1 <=$puissance && $puissance<=2){return 58675;}
                        if (3 <=$puissance && $puissance<=6){return 66885;}
                        if (7 <=$puissance && $puissance<=9){return 73415;}
                        if (10<=$puissance  && $puissance<=11){return 114693;}
                        if (12<=$puissance  && $puissance<=100000){return 129058;}
                    }
                    if ($energie=="D")
                    {
                        if ($puissance==1){return 58675;}
                        if (2 <= $puissance && $puissance<=4){return 66885;}
                        if (5 <= $puissance && $puissance<=6){return 73415;}
                        if (7 <= $puissance && $puissance<=8){return 114693;}
                        if (9 <= $puissance && $puissance<=100000){return 129058;}
                    }
                    break;
                case 12:
                    if ($energie=="E")
                    {
                        if (1  <= $puissance && $puissance<=2){return 61609;}
                        if (3  <= $puissance && $puissance<=6){return 70229;}
                        if (7  <= $puissance && $puissance<=9){return 77086;}
                        if (10 <= $puissance  && $puissance<=11){return 120428;}
                        if (12 <= $puissance  && $puissance<=100000){return 135511;}
                    }
                    if ($energie=="D")
                    {
                        if ($puissance==1){return 61609;}
                        if (2<= $puissance && $puissance<=4){return 70229;}
                        if (5<= $puissance && $puissance<=6){return 77086;}
                        if (7<= $puissance && $puissance<=8){return 120428;}
                        if (9<= $puissance && $puissance<=100000){return 135511;}
                    }
                    break;
                case 8:
                    if ($energie=="E")
                    {
                        if ( 1 <= $puissance && $puissance<=2){return 106675;}
                        if ( 3 <= $puissance && $puissance<=6){return 121603;}
                        if ( 7 <= $puissance && $puissance<=9){return 133481;}
                        if ( 10<= $puissance  && $puissance<=11){return 208525;}
                        if ( 12<= $puissance  && $puissance<=100000){return 234644;}
                    }
                    if ($energie=="D")
                    {
                        if (0 <= $puissance && $puissance<=1){return 0;}
                        if (2 <= $puissance && $puissance<=4){return 121603;}
                        if (5 <= $puissance && $puissance<=6){return 133481;}
                        if (7 <= $puissance && $puissance<=8){return 208525;}
                        if (9 <= $puissance && $puissance<=100000){return 234644;}
                    }
                    break;

                case 9:
                        return 122913;
                    break;
                case 10:
                    if ($energie=="E")
                    {
                        if (1 <= $puissance && $puissance<=2){return 58675;}
                        if (3 <= $puissance && $puissance<=6){return 66885;}
                        if (7 <= $puissance && $puissance<=9){return 73415;}
                        if (10<= $puissance  && $puissance<=11){return 114693;}
                        if (12<= $puissance  && $puissance<=100000){return 129058;}
                    }
                    if ($energie=="D")
                    {
                        if ( 0 <= $puissance && $puissance<=1){return 58675;}
                        if ( 2 <= $puissance && $puissance<=4){return 66885;}
                        if ( 5 <= $puissance && $puissance<=6){return 73415;}
                        if ( 7 <= $puissance && $puissance<=8){return 114693;}
                        if ( 9 <= $puissance && $puissance<=100000){return 129058;}
                    }
                    break;
                case 2:
                    if ( 0 <= $chargeUtile  && $chargeUtile<=1){ return 118965; }
                    if ( 1  > $chargeUtile && $chargeUtile<=3){ return 155190; }
                    if ( 3  > $chargeUtile && $chargeUtile<=5){ return 189715; }
                    if ( 5  > $chargeUtile && $chargeUtile<=8){ return 244617; }
                    if ( 8  > $chargeUtile && $chargeUtile<=11){ return 260925; }
                    if ( 11 > $chargeUtile  && $chargeUtile<=13){ return 273407; }
                    if ( 13 > $chargeUtile  && $chargeUtile<=15){ return 329405; }
                    if ($chargeUtile>15){ return 431327; }
                break;

                case 3:
                     if ($chargeUtile<=0  && $chargeUtile<=1){ return 133500; }
                     if (1 > $chargeUtile && $chargeUtile<=3){ return 171300; }
                     if (3 > $chargeUtile && $chargeUtile<=5){ return 215000; }
                     if (5 > $chargeUtile && $chargeUtile<=9){ return 269700; }
                     if (9 > $chargeUtile && $chargeUtile<=12){ return 339400; }
                     if (12> $chargeUtile  && $chargeUtile<=15){ return 444500; }
                    if ($chargeUtile>15){ return 489000; }
                break;

                case 5:
                    if (0  <= $puissance && $puissance<=50){return 11642; }
                    if (51 <= $puissance  && $puissance<=99){return 19058; }
                    if (100<= $puissance  && $puissance<=175){return 27891; }
                    if (176<= $puissance  && $puissance<=350){return 35858; }
                    if (350 > $puissance  && $puissance<=10000){return 47814; }
                break;
            }
        }
            elseif($zone==2)
            {
                switch ($categorie)
                {
                    case 1:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 55741;}
                            if (3  <= $puissance && $puissance<=6){return 63541;}
                            if (7  <= $puissance && $puissance<=9){return 69744;}
                            if (10 <= $puissance  && $puissance<=11){return 108958;}
                            if (12 <= $puissance  && $puissance<=100000){return 122605;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 55741;}
                            if (2<= $puissance && $puissance<=4){return 63541;}
                            if (5<= $puissance && $puissance<=6){return 69744;}
                            if (7<= $puissance && $puissance<=8){return 108958;}
                            if (9<= $puissance && $puissance<=100000){return 122605;}
                        }
                    break;

                    case 12:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 58529;}
                            if (3  <= $puissance && $puissance<=6){return 66718;}
                            if (7  <= $puissance && $puissance<=9){return 73232;}
                            if (10 <= $puissance  && $puissance<=11){return 114407;}
                            if (12 <= $puissance  && $puissance<=100000){return 128735;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 58529;}
                            if (2 <= $puissance && $puissance<=4){return 66718;}
                            if (5 <= $puissance && $puissance<=6){return 73232;}
                            if (7 <= $puissance && $puissance<=8){return 114407;}
                            if (9 <= $puissance && $puissance<=100000){return 128735;}
                        }
                    break;

                    case 8:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 101341;}
                            if (3  <= $puissance && $puissance<=6){return 115523;}
                            if (7  <= $puissance && $puissance<=9){return 126807;}
                            if (10 <= $puissance  && $puissance<=11){return 198099;}
                            if (12 <= $puissance  && $puissance<=100000){return 222912;}
                        }
                        if ($energie=="D")
                        {
                            if (0 <= $puissance && $puissance<=1){return 0;}
                            if (2 <= $puissance && $puissance<=4){return 115523;}
                            if (5 <= $puissance && $puissance<=6){return 126807;}
                            if (7 <= $puissance && $puissance<=8){return 198099;}
                            if (9 <= $puissance && $puissance<=100000){return 222912;}
                        }
                        break;

                    case 9:
                            return 122913;
                        break;

                    case 10:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 55741;}
                            if (3  <= $puissance && $puissance<=6){return 63541;}
                            if (7  <= $puissance && $puissance<=9){return 69744;}
                            if (10 <= $puissance  && $puissance<=11){return 108958;}
                            if (12 <= $puissance  && $puissance<=100000){return 122605;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 55741;}
                            if (2 <= $puissance && $puissance<=4){return 63541;}
                            if (5 <= $puissance && $puissance<=6){return 69744;}
                            if (7 <= $puissance && $puissance<=8){return 108958;}
                            if (9 <= $puissance && $puissance<=100000){return 122605;}
                        }
                    break;

                    case 2:
                        if ( 0 <= $chargeUtile  && $chargeUtile<=1){ return 113017; }
                        if ( 1 > $chargeUtile && $chargeUtile<=3){ return 147431; }
                        if ( 3 > $chargeUtile && $chargeUtile<=5){ return 180229; }
                        if ( 5 > $chargeUtile && $chargeUtile<=8){ return 232386; }
                        if ( 8 > $chargeUtile && $chargeUtile<=11){ return 247879; }
                        if ( 11> $chargeUtile  && $chargeUtile<=13){ return 259737; }
                        if ( 13> $chargeUtile  && $chargeUtile<=15){ return 312935; }
                        if ($chargeUtile>15){ return 409761; }
                    break;

                    case 3:
                        if ( 0  <= $chargeUtile && $chargeUtile<=1){ return 126825; }
                        if ( 1  >  $chargeUtile  && $chargeUtile<=3){ return 162735; }
                        if ( 3  >  $chargeUtile  && $chargeUtile<=5){ return 204250; }
                        if ( 5  >  $chargeUtile  && $chargeUtile<=9){ return 256215; }
                        if ( 9  >  $chargeUtile  && $chargeUtile<=12){ return 322430; }
                        if ( 12 >  $chargeUtile  && $chargeUtile<=15){ return 422275; }
                        if ($chargeUtile>15){ return 464550; }
                    break;

                    case 5:
                        if (0   <=  $puissance && $puissance<=50){return 11060; }
                        if (51  <=  $puissance && $puissance<=99){return 18105; }
                        if (100 <=  $puissance  && $puissance<=175){return 26496; }
                        if (176 <=  $puissance  && $puissance<=350){return 34065; }
                        if (350 >    $puissance && $puissance<=10000){return 45423; }
                    break;
                }
            }

            else if($zone==3)
            {
                switch ($categorie)
                {
                    case 1:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 52808;}
                            if (3  <= $puissance && $puissance<=6){return 60197;}
                            if (7  <= $puissance && $puissance<=9){return 66074;}
                            if (10 <= $puissance  && $puissance<=11){return 103224;}
                            if (12 <= $puissance  && $puissance<=100000){return 116152;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 52808;}
                            if (2 <= $puissance && $puissance<=4){return 60197;}
                            if (5 <= $puissance && $puissance<=6){return 66074;}
                            if (7 <= $puissance && $puissance<=8){return 103224;}
                            if (9 <= $puissance && $puissance<=100000){return 116152;}
                        }
                    break;

                    case 12:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 55448;}
                            if (3  <= $puissance && $puissance<=6){return 63206;}
                            if (7  <= $puissance && $puissance<=9){return 69377;}
                            if (10 <= $puissance  && $puissance<=11){return 108385;}
                            if (12 <= $puissance  && $puissance<=100000){return 121960;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 55448;}
                            if (2 <= $puissance && $puissance<=4){return 63206;}
                            if (5 <= $puissance && $puissance<=6){return 69377;}
                            if (7 <= $puissance && $puissance<=8){return 108385;}
                            if (9 <= $puissance && $puissance<=100000){return 121960;}
                        }
                    break;

                    case 8:
                        if ($energie=="E")
                        {
                            if (1  <= $puissance && $puissance<=2){return 96008;}
                            if (3  <= $puissance && $puissance<=6){return 109443;}
                            if (7  <= $puissance && $puissance<=9){return 120133;}
                            if (10 <= $puissance  && $puissance<=11){return 187673;}
                            if (12 <= $puissance  && $puissance<=100000){return 211180;}
                        }
                        if ($energie=="D")
                        {
                            if (0 <= $puissance && $puissance<=1){return 0;}
                            if (2 <= $puissance && $puissance<=4){return 109443;}
                            if (5 <= $puissance && $puissance<=6){return 120133;}
                            if (7 <= $puissance && $puissance<=8){return 187673;}
                            if (9 <= $puissance && $puissance<=100000){return 211180;}
                        }
                        break;

                    case 9:
                            return 122913;
                        break;

                    case 10:
                        if ($energie=="E")
                        {
                            if ( 1 <= $puissance && $puissance<=2){return 52808;}
                            if ( 3 <= $puissance && $puissance<=6){return 60197;}
                            if ( 7 <= $puissance && $puissance<=9){return 66074;}
                            if ( 10<= $puissance  && $puissance<=11){return 103224;}
                            if ( 12<= $puissance  && $puissance<=100000){return 116152;}
                        }
                        if ($energie=="D")
                        {
                            if ($puissance==1){return 52808;}
                            if (2 <= $puissance && $puissance<=4){return 60197;}
                            if (5 <= $puissance && $puissance<=6){return 66074;}
                            if (7 <= $puissance && $puissance<=8){return 103224;}
                            if (9 <= $puissance && $puissance<=100000){return 116152;}
                        }
                    break;

                    case 2:
                        if (0 <= $chargeUtile && $chargeUtile<=1){ return 107069; }
                        if (1 >  $chargeUtile  && $chargeUtile<=3){ return 139671; }
                        if (3 >  $chargeUtile  && $chargeUtile<=5){ return 170744; }
                        if (5 >  $chargeUtile  && $chargeUtile<=8){ return 220155; }
                        if (8 >  $chargeUtile  && $chargeUtile<=11){ return 234833; }
                        if (1 >  $chargeUtile1 && $chargeUtile<=13){ return 246066; }
                        if (1 >  $chargeUtile3 && $chargeUtile<=15){ return 296465; }
                        if ($chargeUtile>15){ return 388194; }
                    break;

                    case 3:
                        if ( 0  <= $chargeUtile && $chargeUtile<=1){ return 120150; }
                        if ( 1  >  $chargeUtile  && $chargeUtile<=3){ return 154170; }
                        if ( 3  >  $chargeUtile  && $chargeUtile<=5){ return 193500; }
                        if ( 5  >  $chargeUtile  && $chargeUtile<=9){ return 242730; }
                        if ( 9  >  $chargeUtile  && $chargeUtile<=12){ return 305460; }
                        if ( 12 >  $chargeUtile  && $chargeUtile<=15){ return 400050; }
                        if ($chargeUtile>15){ return 440100; }
                    break;

                    case 5:
                        if ( 0   <= $puissance && $puissance<=50){return 10478; }
                        if ( 51  <= $puissance && $puissance<=99){return 17152; }
                        if ( 100 <= $puissance  && $puissance<=175){return 25102; }
                        if ( 176 <= $puissance  && $puissance<=350){return 32272; }
                        if ( 350 >  $puissance  && $puissance<=10000){return 43033; }
                    break;
                }
        }
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

    public function brisDeGlace($categorie, $valeurNeuve)
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

    public function personnesTransportees($nbPlace, $formule)
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

    public function primeFractionee($rcCat01, $fractionPrime)
    {
        return $rcCat01 * $fractionPrime;
    }
}

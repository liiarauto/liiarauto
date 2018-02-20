<?php
/**
 * Created by PhpStorm.
 * User: Cyrille_able
 * Date: 06/02/2018
 * Time: 20:05
 */

namespace LiiarAuto\Http\Controllers\Assurance;


use LiiarAuto\Http\Controllers\Controller;

class PrimeNetteController extends Controller
{
    protected $primeBrutes;
    protected $primeFractionnees;

    public function __construct()
    {
        $this->primeBrutes=new PrimesBrutesController();
        $this->primeFractionnees=new PrimesFractionneesController();
    }


    public function primeNette($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone,$conduite=null,$profession=null)
    {
        $rc=$this->primeBrutes-responsabiliteCivile($categorie, $puissance, $energie, $chargeUtile, $nbPersonnes, $zone,$conduite=null,$profession=null);

    }

}
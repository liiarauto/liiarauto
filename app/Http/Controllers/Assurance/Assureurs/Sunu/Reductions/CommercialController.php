<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Reductions;

use Illuminate\Http\Request;

class CommercialController extends Controller
{
    /*public function rC($rcFractionnee,$redProfession,$redPermis,$bns)
    {
        return ceil($rcFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }

    public function defenseEtRecours($drFractionnee,$redProfession,$redPermis, $bns)
    {
        return ceil($drFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }*/

    public function incendie($incendieFractionnee, $redProfession, $redPermis, $bns, $com)
    {
        return ceil($incendieFractionnee*(1-$redProfession)*(1-$redPermis)*(1-$bns)*$com);
    }

    public function volVolAgressionEtVolAccessoires($volFractionnee, $redProfession, $redPermis, $bns, $com)
    {
        return ceil($volFractionnee*(1-$redProfession)*(1-$redPermis)*(1-$bns)*$com);
    }

    public function brisDeGlaces($brisFracrionnee, $redProfession, $redPermis, $bns, $com)
    {
        return ceil($brisFracrionnee*(1-$redProfession)*(1-$redPermis)*(1-$bns)*$com);
    }
}

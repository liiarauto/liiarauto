<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Reductions;

use Illuminate\Http\Request;

class BNSController extends Controller
{
    public function rC($rcFractionnee,$redProfession,$redPermis,$bns)
    {
        return ceil($rcFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }

    public function defenseEtRecours($drFractionnee,$redProfession,$redPermis, $bns)
    {
        return ceil($drFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }

    public function incendie($incendieFractionnee, $redProfession, $redPermis, $bns)
    {
        return ceil($incendieFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }

    public function volVolAgressionEtVolAccessoires($volFractionnee, $redProfession, $redPermis, $bns)
    {
        return ceil($volFractionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }

    public function brisDeGlaces($brisFracrionnee, $redProfession, $redPermis, $bns)
    {
        return ceil($brisFracrionnee*(1-$redProfession)*(1-$redPermis)*$bns);
    }
}

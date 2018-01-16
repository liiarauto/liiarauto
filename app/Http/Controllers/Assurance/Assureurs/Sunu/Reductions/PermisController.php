<?php

namespace LiiarAuto\Http\Controllers\Assurance\Assureurs\Sunu\Reductions;

use Illuminate\Http\Request;

class PermisController extends Controller
{
    public function rC($rcFractionnee,$redProfession,$redPermis)
    {
        return ceil($rcFractionnee*(1-$redProfession)*$redPermis);
    }

    public function defenseEtRecours($drFractionnee,$redProfession,$redPermis)
    {
        return ceil($drFractionnee*(1-$redProfession)*$redPermis);
    }

    public function incendie($incendieFractionnee, $redProfession, $redPermis)
    {
        return ceil($incendieFractionnee*(1-$redProfession)*$redPermis);
    }

    public function volVolAgressionEtVolAccessoires($volFractionnee, $redProfession, $redPermis)
    {
        return ceil($volFractionnee*(1-$redProfession)*$redPermis);
    }

    public function brisDeGlaces($brisFracrionnee, $redProfession, $redPermis)
    {
        return ceil($brisFracrionnee*(1-$redProfession)*$redPermis);
    }
}

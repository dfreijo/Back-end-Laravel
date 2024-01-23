<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'mostrarFormularioLogin',
        'mostrarFormularioRegistro',
        'userProfile',
        'userCancelar',
        'userProfileModify',
        'userInscription',
        'userAddInscription',
        'userAddInscriptionBack',
        'userBack',
        'userDesInscription',
        'userDesAddInscription',
        'adminAddEventInsert',
        'adminEditFullEvent',
        'adminCrearPonente',
        'adminGestionarPonente',
        'adminTypeEvent',
        'adminTypeEventEdit',
        'adminTypeEventAdd',
    ];
}

<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/api/login',
        "http://localhost:8000/api/logout",
        'http://127.0.0.1:8000/api/adminstore',
        'http://127.0.0.1:8000/api/profStore',
        'http://127.0.0.1:8000/api/profs',
        'http://127.0.0.1:8000/api/profUpdate',

        'http://127.0.0.1:8000/api/etudiantStore',
        'http://127.0.0.1:8000/api/etudiants',
        'http://127.0.0.1:8000/api/etudiantUpdate',
        'http://127.0.0.1:8000/api/etudiants/',
        'http://127.0.0.1:8000/api/modules/',
        'http://127.0.0.1:8000/api/moduleStore',
        'http://127.0.0.1:8000/api/suitStore',
        'http://127.0.0.1:8000/api/suitUpdate',
        'http://127.0.0.1:8000/api/profUpdatInfo',
        'http://127.0.0.1:8000/api/etudiantUpdatInfo',
        'http://127.0.0.1:8000/api/pfeStore',
       
    ];
}

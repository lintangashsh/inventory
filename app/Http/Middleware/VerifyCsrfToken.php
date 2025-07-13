<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        // Jika ada route yang ingin dikecualikan dari CSRF bisa ditambahkan di sini
    ];
}

<?php

namespace App\Controllers;

use App\Core\App;

class HomeController
{
    /**
     * Página "Home"
     */
    public function home()
    {
        $company = 'Summa Solutions';

        return view('home', compact('company'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MagazijnmedewerkerController extends Controller
{
    /**
     * Toon de homepage van de magazijnmedewerker.
     */
    public function index(): View
    {
        return view('magazijnmedewerker.index');
    }
}
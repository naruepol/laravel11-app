<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function index() {
        return Inertia::render('Home');
    }

    function about() {
        return  Inertia::render('About');
    }
}

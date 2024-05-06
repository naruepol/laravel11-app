<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function index() {
        return Inertia::render('Home');
    }

    function about() {
        return  Inertia::render('About', [
            'message' => 'This is a message from the controller',
            'postcode' => 71000
        ]);
    }

    function user() {
        return  Inertia::render('User',[
            'users' => User::all()
        ]);  //User.vue
    }
}

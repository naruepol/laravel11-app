<?php

namespace App\Http\Controllers;
use App\Models\User;
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

    public function user() {
        // $users = User::paginate(10);
        // return $users;
        return  Inertia::render('User',[
            'users' => User::all()
        ]);  //User.vue
    }
}

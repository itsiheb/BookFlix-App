<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = user::Auth();

        if ($user->hasRole('user')) {
            return redirect('/user');
        }
        if ($user->hasRole('superadministrator')) {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}

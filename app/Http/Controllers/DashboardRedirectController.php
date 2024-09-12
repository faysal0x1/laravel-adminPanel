<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardRedirectController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $roles = $user->getRoles();

        if ($user->hasRole('admin')) {            // Admin
            // return redirect()->route('admin.dashboard');
            return redirect()->route('admin.dashboard');
        } else {

            return redirect()->route('dashboard');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();

        $data = [
            [
                'title' => 'Total Users',
                'count' => $totalUsers,
                'icon' => 'bx-user',
                'color' => 'bg-gradient-deepblue'
            ],

        ];

        return view('admin.index', compact('data'));
    }
}

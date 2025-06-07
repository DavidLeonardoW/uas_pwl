<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        switch ($user->role_id) {
            case 1:
                return view('dashboard.member');
            case 2:
                return view('dashboard.admin');
            case 3:
                return view('dashboard.panitia');
            case 4:
                return view('dashboard.keuangan');
        }
    }
}

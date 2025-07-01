<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    // dasboard super admin
    public function superadmin()
    {
        $user = Auth::user(); // jika ingin menampilkan info user
        return view('dashboard.superadmin', compact('user'));
    }

    // dashboard admin 
    public function admin()
    {
        $user = Auth::user();
        return view('dashboard.admin', compact('user'));
    }

    // dashoard mitra
    public function mitra()
    {
        $user = Auth::user();

        // Pastikan mitra sudah member
        if ($user->member_status !== 'member') {
            abort(403, 'Akun Anda belum aktif sebagai member mitra.');
        }

        return view('dashboard.mitra', compact('user'));
    }
}

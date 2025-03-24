<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Obat;
use App\Models\Periksa;
use App\Models\DetailPeriksa;

class DataController extends Controller
{
    public function index()
    {
        $users = User::all();
        $obats = Obat::all();
        $periksas = Periksa::all();
        $detailPeriksas = DetailPeriksa::all();

        return view('data', compact('users', 'obats', 'periksas', 'detailPeriksas'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;
use App\Models\User;
use App\Models\AnggotaModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = [
            "jumlah_data_buku" => BukuModel::count(),
            "jumlah_data_user" => User::count(),
            "jumlah_data_anggota" => AnggotaModel::count()
        ];

        return view('v_home', $data);
    }
}

<?php

namespace App\Http\Controllers;
use App\models\Transaksi;
use Illuminate\Http\Request;
use Facade\FlareClient\View;
use PhpParser\Builder\Function_;
use App\Models\BukuModel;
use App\Models\User;
use App\Models\AnggotaModel;
use App\Models\Peminjaman;

class TransaksiController extends Controller
{
    public function index(){
        return view('/admin/transaksi/v_transaksi');

    }

    public function form_peminjaman()
    {
    	$data = [
    		"data_buku" => BukuModel::get(),
    		"data_anggota" => AnggotaModel::get()
    	];

    	return view("/admin/transaksi/form_peminjaman", $data);
    }

    public function simpan_peminjaman(Request $req)
    {
    	Peminjaman::create([
    		"kode_peminjaman" => $req->kode_peminjaman,
    		"id_buku" => $req->id_buku,
    		"id_anggota" => $req->id_anggota,
    		"tanggal_pinjam" => $req->tanggal_pinjam,
    		"id_admin" => $req->id_admin
    	]);

    	return redirect()->back();
    }
}

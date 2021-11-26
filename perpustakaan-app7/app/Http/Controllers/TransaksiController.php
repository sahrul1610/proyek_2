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
use App\Models\DendaModel;

class TransaksiController extends Controller
{
    public function index(){
        $data = [

            "denda" => DendaModel::orderBy("denda", "DESC")->get(),
            "peminjaman" => peminjaman::orderBy("kode_peminjaman")->get()

        ];
        return view('/admin/transaksi/v_transaksi', $data);

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
    		"kode_buku" => $req->kode_buku,
    		"id_anggota" => $req->id_anggota,
    		"tanggal_pinjam" => $req->tanggal_pinjam,
    		"tanggal_kembali" => $req->tanggal_kembali,
    		"id_petugas" => $req->id_petugas
    	]);

    	return redirect()->route('transaksi')->with('pesan','data berhasil di tambahkan');
    }

    public function form_pengembalian()
    {
        echo "string";
    }
}

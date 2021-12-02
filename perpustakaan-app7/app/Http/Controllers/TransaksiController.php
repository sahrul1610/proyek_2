<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
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
            "transaksi" => Transaksi::orderBy("kode_transaksi")->get()

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
    	Transaksi::create([
    		"kode_transaksi" => $req->kode_transaksi,
    		"kode_buku" => $req->kode_buku,
    		"id_anggota" => $req->id_anggota,
    		"tanggal_pinjam" => $req->tanggal_pinjam,
    		"tanggal_kembali" => $req->tanggal_kembali,
    		//"tanggal_mengembalikan" => $req->tanggal_mengembalikan,
    		// "denda" => $req->denda,
    		"id_petugas" => $req->id_petugas
    	]);

    	return redirect()->route('transaksi')->with('pesan','data berhasil di tambahkan');
    }

    public function form_pengembalian()
    {
        echo "string";
    }

    public function detail($id_transaksi){
        $data = [
            "transaksi" => Transaksi::where("id_transaksi", $id_transaksi)->first(),
    		"data_buku" => BukuModel::get(),
    		"data_anggota" => AnggotaModel::get()
    	];

        return view("/admin/transaksi/v_detail", $data);
    }

    public function update(Request $req){

        Transaksi::where("id_transaksi", $req->id_transaksi)->update([
            "kode_transaksi" => $req->kode_transaksi,
    		//"kode_buku" => $req->kode_buku,
    		//"id_anggota" => $req->id_anggota,
    		"tanggal_pinjam" => $req->tanggal_pinjam,
    		"tanggal_kembali" => $req->tanggal_kembali,
    		"tanggal_mengembalikan" => $req->tanggal_mengembalikan,
    		// "denda" => $req->denda,
    		"id_petugas" => $req->id_petugas
        ]);
        return redirect("/transaksi");
    }
}

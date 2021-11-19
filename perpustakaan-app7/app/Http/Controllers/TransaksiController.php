<?php

namespace App\Http\Controllers;
use App\models\Transaksi;
use Illuminate\Http\Request;
use Facade\FlareClient\View;
use PhpParser\Builder\Function_;

class TransaksiController extends Controller
{
    public function index(){
        return view('/admin/transaksi/v_transaksi');

    }
}

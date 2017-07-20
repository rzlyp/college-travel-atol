<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;
use App\User;
use App\Transaksi;
use Carbon\Carbon;
class AdminController extends Controller
{
	public function __construct(){
	      $this->middleware('auth');
	 }
    public function dashboard(){
    	$today = Carbon::today();

    	$kendaraan = Kendaraan::All();
    	$petugas = User::where('role','petugas')->get();
    	$transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
            ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
            ->whereDate('transaksi.created_at',$today->toDateString())
            ->orderBy('transaksi.created_at','DESC')
            ->get();
    	return view('admin/index',['kendaraan' => $kendaraan, 'petugas' => $petugas, 'transaksi' => $transaksi]);
    }
}

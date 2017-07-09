<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;
use App\User;
use App\Transaksi;

class AdminController extends Controller
{
	public function __construct(){
	      $this->middleware('auth');
	 }
    public function dashboard(){
    	$kendaraan = Kendaraan::All();
    	$petugas = User::where('role','petugas')->get();

    	return view('admin/index',['kendaraan' => $kendaraan, 'petugas' => $petugas]);
    }
}

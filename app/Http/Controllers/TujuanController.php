<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Tujuan;
use App\Kendaraan;

class TujuanController extends Controller
{
    public function __construct(){
	      $this->middleware('auth');
	 }
    function getAdd(){
    	$kendaraan = Kendaraan::All();
		 return view('petugas/tujuan-add')->with('kendaraan',$kendaraan);
	}
    function postAdd(Request $request){
    	if(Auth::check()){
    		$user = Auth::user()->id;
	    	$data = [
	    		'kode_tujuan' => $request->input('kode_tujuan'),
	    		'nama_tujuan' => $request->input('nama_tujuan'),
	    		'tarif' => $request->input('tarif'),
	    		'id_user' => $user,
	    		'id_kendaraan' => $request->input('kendaraan')
	    	];

	    	$create = Tujuan::create($data);
	    	if($create){
	    		Session::flash('success','Tujuan berhasil ditambahkan.');
	    		return redirect('/petugas/tujuan/add');
	    	}
    	}
    	
    }

    function getTujuan(){
    	$tujuan = Tujuan::join('kendaraan','kendaraan.id_kendaraan','tujuan.id_kendaraan')->get();

    	return view('petugas/tujuan',['tujuan'=> $tujuan]);
    }
     public function getUpdate($id){
        $tujuan =Tujuan::join('kendaraan','kendaraan.id_kendaraan','tujuan.id_kendaraan')->first();
        $kendaraan = Kendaraan::All();
        return view('petugas/tujuan-update',['tujuan'=>$tujuan, 'kendaraan'=>$kendaraan]);
    }
    public function postUpdate($id, Request $request){
    	$user = Auth::user()->id;
	    $data = [
	    		'kode_tujuan' => $request->input('kode_tujuan'),
	    		'nama_tujuan' => $request->input('nama_tujuan'),
	    		'tarif' => $request->input('tarif'),
	    		'id_user' => $user,
	    		'id_kendaraan' => $request->input('kendaraan')
	    ];
    	$edit = Tujuan::where('id_tujuan',$id);
    	$edit->update($data);
        if($edit){
            Session::flash('success','Tujuan berhasil diubah.');
            return redirect('/petugas/tujuan');
        }
    }
    public function delete($id){
        $delete = Tujuan::where('id_tujuan',$id);
        $delete->delete();
        if($delete){
            Session::flash('success','Tujuan berhasil di hapus.');
            return redirect('/petugas/kendaraan');
        }
    }
}
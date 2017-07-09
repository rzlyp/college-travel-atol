<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;
use Auth;
use Session;

class KendaraanController extends Controller
{
	 public function __construct(){
	      $this->middleware('auth');
	 }
    function getAdd(){
		 return view('petugas/kendaraan-add');
	}
    function postAdd(Request $request){
    	if(Auth::check()){
    		$user = Auth::user()->id;
	    	$data = [
	    		'nama_kendaraan' => $request->input('nama_kendaraan'),
	    		'kapasitas_kendaraan' => $request->input('kapasitas'),
	    		'id_users' => $user
	    	];

	    	$create = Kendaraan::create($data);
	    	if($create){
	    		Session::flash('success','Kendaraan berhasil ditambahkan.');
	    		return redirect('/petugas/kendaraan/add');
	    	}
    	}
    	
    }

    function getKendaraan(){
    	$kendaraan = Kendaraan::All();

    	return view('petugas/kendaraan',['kendaraan'=> $kendaraan]);
    }
     public function getUpdate($id){
        $kendaraan = Kendaraan::where('id_kendaraan',$id)->first();
        return view('petugas/kendaraan-update',['kendaraan'=>$kendaraan]);
    }
    public function postUpdate($id, Request $request){
    	$data = [
	    		'nama_kendaraan' => $request->input('nama_kendaraan'),
	    		'kapasitas_kendaraan' => $request->input('kapasitas'),
	    		'id_users' => Auth::user()->id
	   ];
    	$edit = Kendaraan::where('id_kendaraan',$id);
    	$edit->update($data);
        if($edit){
            Session::flash('success','Kendaraan berhasil diubah.');
            return redirect('/petugas/kendaraan');
        }
    }
    public function delete($id){
        $delete = Kendaraan::where('id_kendaraan',$id);
        $delete->delete();
        if($delete){
            Session::flash('success','Kendaraan berhasil di hapus.');
            return redirect('/petugas/kendaraan');
        }
    }
}

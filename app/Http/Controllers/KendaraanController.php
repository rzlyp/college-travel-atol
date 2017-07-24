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
	    		return redirect('/petugas/kendaraan');
	    	}
    	}
    	
    }
    function getAddAdmin(){
         return view('admin/kendaraan-add');
    }
    function postAddAdmin(Request $request){
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
                return redirect('/admin/kendaraan');
            }
        }
        
    }
    function getKendaraan(){
    	$kendaraan = Kendaraan::All();

    	return view('petugas/kendaraan',['kendaraan'=> $kendaraan]);
    }
     function getKendaraanAdmin(){
        $kendaraan = Kendaraan::All();

        return view('petugas/kendaraan',['kendaraan'=> $kendaraan]);
    }
     function getCari(){
        if(Auth::user()->role === 'petugas'){
            return view('/petugas/kendaraan-cari');
        }
        return view('/admin/kendaraan-cari');
    }
     function postCari(Request $request){
        $cat = $request->input('cat');

        if($cat === 'id'){
            $kendaraan = Kendaraan::where('id_kendaraan', $request->input('cari'))->get();
        }else{
            $kendaraan = Kendaraan::where('nama_kendaraan','like','%'.$request->input('cari').'%')->get();
        }
        if(Auth::user()->role === 'admin'){
            return view('/admin/kendaraan')->with('kendaraan', $kendaraan);
        }
        return view('/petugas/kendaraan')->with('kendaraan', $kendaraan);
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

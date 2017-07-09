<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class UsersController extends Controller
{	
	function getAddPetugas(){
		 return view('admin/petugas-add');
	}
    function postPetugas(Request $request){
    	$data = [
    		'username' => $request->input('username'),
    		'password' => bcrypt($request->input('password')),
    		'nama' => $request->input('nama'),
    		'role' => $request->input('role'),
    		'remember_token' => '',
    		'foto' => ''
    	];

    	$create = User::create($data);
    	if($create){
    		Session::flash('success','User berhasil ditambahkan.');
    		return redirect('/admin/petugas/add');
    	}
    }

    function getPetugas(){
    	$petugas = User::where('role','petugas')->get();

    	return view('admin/petugas',['petugas'=> $petugas]);
    }
     public function getUpdate($id){
        $petugas = User::where('id',$id)->first();
        return view('admin/petugas-update',['petugas'=>$petugas]);
    }
    public function postUpdate($id, Request $request){
    	$data = [
    		'username' => $request->input('username'),
    		'password' => bcrypt($request->input('password')),
    		'nama' => $request->input('nama'),
    		'role' => $request->input('role'),
    		'foto' => ''
    	];
    	$edit = User::find($id);
    	$edit->update($data);
        if($edit){
            Session::flash('success','User berhasil diubah.');
            return redirect('/admin/petugas');
        }
    }
    public function delete($id){
        $delete = User::where('id',$id);
        $delete->delete();
        if($delete){
            Session::flash('success','User berhasil di hapus.');
            return redirect('/admin/petugas');
        }
    }
}

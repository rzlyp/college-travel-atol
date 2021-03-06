<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tujuan;
use App\Transaksi;
use App\Pembeli;
use Session;
use Carbon\Carbon;
use PDF;

class TransaksiController extends Controller
{
    public function getDashboard(){
    	$tujuan = Tujuan::All();
    	return view('petugas/tiket')->with('tujuan',$tujuan);
    }
    public function getPrice($id){
    	$cari = Tujuan::where('id_tujuan',$id)->get();

    	return response()->json($cari);
    }
    public function postPemesanan(Request $request){
    	$pembeli = [
    		'nama_pembeli' => $request->input('nama_pembeli'),
    		'alamat' => $request->input('alamat'),
    		'no_hp' => $request->input('no_hp')
    	];
    	$save = Pembeli::create($pembeli);

    	if($save){
    		$find = Pembeli::where('no_hp',$pembeli['no_hp'])->orderBy('id_pembeli','DESC')->first();
    		$transaksi = [
    			'id_pembeli' => $find->id_pembeli,
    			'jumlah_tiket' => $request->input('jumlah_tiket'),
    			'status_jemput' => $request->input('status_jemput'),
    			'id_tujuan' => $request->input('id_tujuan'),
    			'tgl_keberangkatan' => $request->input('tgl_keberangkatan'),
    			'jam_keberangkatan' => $request->input('jam_keberangkatan'),
    			'total_harga' => $request->input('total_harga'),
    			'id_user' => Auth::user()->id
    		];

    		Transaksi::create($transaksi);

    		return response()->json('{"status_code" => 201, "message" => "Success"}');
    	}

    }
    public function getTransaksi(){
        $transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
            ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
            ->orderBy('transaksi.created_at','DESC')
            ->get();
        if(Auth::user()->role === 'admin'){
            return view('admin/transaksi')->with('transaksi',$transaksi);
        }
        return view('petugas/transaksi')->with('transaksi',$transaksi);
    }
     function getCari(){
        if(Auth::user()->role === 'petugas'){
            return view('/petugas/transaksi-cari');
        }
        return view('/admin/transaksi-cari');
    }
     function postCari(Request $request){
        $cat = $request->input('cat');

        if($cat === 'id'){
            $transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
                        ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
                        ->where('pembeli.nama_pembeli', $request->input('cari'))
                        ->orderBy('transaksi.created_at','DESC')
                        ->get();
        }else if($cat === 'nama'){
            $transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
                        ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
                        ->where('pembeli.nama_pembeli','LIKE', '%'.$request->input('cari').'%')
                        ->orderBy('transaksi.created_at','DESC')
                        ->get();
        }else{
            $transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
                        ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
                        ->whereDate('transaksi.created_at', $request->input('cari'))
                        ->orderBy('transaksi.created_at','DESC')
                        ->get();
        }
        if(Auth::user()->role === 'admin'){
            return view('/admin/transaksi')->with('transaksi', $transaksi);
        }
        return view('/petugas/transaksi')->with('transaksi', $transaksi);
    }
    public function toPDF(){
        $transaksi = Transaksi::join('pembeli','pembeli.id_pembeli','transaksi.id_pembeli')
            ->join('tujuan','tujuan.id_tujuan','transaksi.id_tujuan')
            ->orderBy('transaksi.created_at','DESC')
            ->get();
        $pdf = PDF::loadView('print.transaksi', array('transaksi' => $transaksi));
        return $pdf->download('transaksi.pdf');
    }

}

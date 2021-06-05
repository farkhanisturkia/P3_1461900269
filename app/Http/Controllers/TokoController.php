<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController
{
    public function tamp_tran()
    {
        $semua = DB::table('transaksi')
        ->Join('barang', 'transaksi.id_barang', '=', 'barang.id')
        ->Join('pelanggan', 'transaksi.id_pelanggan', '=', 'pelanggan.id')
        ->select('transaksi.id','barang.nama AS nama_barang','barang.harga AS harga_barang','pelanggan.nama AS nama_pelanggan','pelanggan.alamat AS alamat_pelanggan',)
        ->orderBy('transaksi.id', 'asc')
        ->get();

    	return view('tampilkan0269',['transaksi' => $semua]);
    }

    public function insert(Request $request)
    {
        DB::table('user')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect('/user0269');
    }

    public function tambah(){
        return view('tambahuser0269');
    }

    public function user(){
        $user = DB::table('user')
        ->get();

    	return view('user0269',['user' => $user]);
    }

}

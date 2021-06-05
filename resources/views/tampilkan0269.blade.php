@extends('layouts.app')

@section('title','home')

@section('content')
    
    <div class="container">
        <h4>TAMPILKAN DATA</h4><br><br>
        <a href="{{url('/tamp_barang0269')}}">Barang</a><br>
        <a href="{{url('/tamp_pelanggan0269')}}">Pelanggan</a><br>
        <a href="{{url('/tamp_transaksi0269')}}">Transaksi</a><br>
        <a href="{{url('/tamp_user0269')}}">User</a>
    </div>
@endsection

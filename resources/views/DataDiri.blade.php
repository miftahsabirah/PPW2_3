@extends('master')
@section('title', 'Data Diri')
@section('header')
@parent
<div>Data Diri</div>
@endsection
@section('content')
<p>Nama : {{$nama}}</p>
<p>Umur : {{$umur}}</p>
<p>Email : {{$email}}</p>
<p>No Telp : {{$no}}</p>
<p>Alamat : {{$alamat}}</p>
@endsection
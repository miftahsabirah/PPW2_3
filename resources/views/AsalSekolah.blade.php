@extends('master')
@section('header')
@parent
<div>Asal Sekolah</div>
@endsection
@section('content')
<p>Sekolah Asal : {{$sekolahAsal}}</p>
<p>Alamat Sekolah : {{$alamatSekolah}}</p>
@endsection
@extends('Master_User.tampilan')
@section('title','Halaman User')
@section('content')

<h1>Hello ,{{Auth::user()->name}}</h1>
@endsection
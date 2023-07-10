@extends('Master_Admin.tampilan')
@section('title','Dashboard')
@section('content')

<h1>{{Auth::user()->name}}</h1>

@endsection
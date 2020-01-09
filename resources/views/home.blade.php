@extends('layouts.app')

@section('content')
  <h1>Bienvenido {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h1>
@endsection
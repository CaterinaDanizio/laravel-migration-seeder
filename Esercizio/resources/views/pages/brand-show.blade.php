@extends('layout.main-layout')



@section('content')
    
    <h1>{{ $brand -> name }} </h1>
    <img src="{{ $brand -> logo }}" alt="logo">
    <h2>Numero uffici nel mondo: {{ $brand -> n_locations }}</h2>
@endsection
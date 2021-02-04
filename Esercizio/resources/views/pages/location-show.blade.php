@extends('layout.main-layout')



@section('content')
    
    <h1>{{ $location-> name }}</h1>
    <h2>Indirizzo: {{ $location -> address }}</h2>
    <h2>N° dipendenti: {{ $location -> n_employees }}</h2>
@endsection
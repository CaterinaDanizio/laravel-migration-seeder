@extends('layout.main-layout')



@section('content')
    
    <h1>{{ $employee -> name }} {{ $employee -> lastname }}</h1>
    <h2>Data di assunzione: {{ $employee -> date_of_hiring }}</h2>
@endsection
@extends('layout.main-layout')



@section('content')
    <ul>
        <h1>Lista dipendenti</h1>
        @foreach ($employees as $employee)
            
            <a href="{{ route('employee-show', $employee -> id) }}">
                    <li>{{ $employee -> name }} {{ $employee -> lastname }}        
                    </li>
                </a>          
        @endforeach
    </ul>  
@endsection
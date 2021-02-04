@extends('layout.main-layout')



@section('content')
    <ul>
        <h1>Lista uffici</h1>
        @foreach ($locations as $location)
            
            <a href="{{ route('location-show', $location -> id) }}">
                    <li>{{ $location -> name }}     
                    </li>
                </a>          
        @endforeach
    </ul>  
@endsection
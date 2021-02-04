@extends('layout.main-layout')



@section('content')
    <ul>
        <h1>Lista brand</h1>
        @foreach ($brands as $brand)
            <li>
                <a href="{{ route('brand-show', $brand -> id) }}">
                    {{ $brand -> name }}
                </a>
            </li>         
        @endforeach
    </ul>  
@endsection
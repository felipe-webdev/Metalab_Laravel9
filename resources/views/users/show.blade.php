@extends('layouts/app')

@section('title', 'Detalhes')

@section('content')

    <h1>Detalhes users show view</h1>
    <ul>
        <li>
            {{$users -> name}}
        </li>
        <li>
            {{$users -> email}}
        </li>
    </ul>

@endsection
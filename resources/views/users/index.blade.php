@extends('layouts/app')

@section('title', 'Listagem')

@section('content')

    <h1>Listagem users index view</h1>
    <ul>
        @foreach($users as $user)
        <li>
            {{$user -> name}} - {{$user -> email}}
                <a href="{{ route('users/show', $user->id)}}">Detalhes</a>
        </li>
        @endforeach
    </ul>

@endsection
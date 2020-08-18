@extends('layouts/_master')
@section('content')
    <ul>
        @foreach ($utilisateurs as $utilisateur)
    <li><a href="{{route('utilisateurs.show',$utilisateur->id)}}">{{$utilisateur ->Nom}}</a></li>
        @endforeach

    </ul>
@endsection
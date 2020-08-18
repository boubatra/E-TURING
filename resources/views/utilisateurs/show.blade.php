@extends('layouts/_master')
@section('content')
    
        
    <h1>Bienvenue <a href="{{route('utilisateurs.edit',$utilisateurs ->id)}}"> {{$utilisateurs ->Nom}} </a>!</h1>
        

    
@endsection
@extends('layouts/_master')
@section('content')
<h1>Edit Utilisateur</h1>    
<form method="post" action="/utilisateurs/{{$utilisateurs->id}}">
        @csrf
        
        <input type="hidden" name="_method" value="PUT">
        <input type="text" value="{{$utilisateurs->Login}}"name="Login" required placeholder="USERNAME"><br>
        <input type="text" value="{{$utilisateurs->Prenom}}"name="Prenom" required placeholder="QUEL EST VOTRE PRENOM?"><br>
        <input type="text" value="{{$utilisateurs->Nom}}"name="Nom" required placeholder="QUEL EST VOTRE NOM?"><br>
        <input type="date" value="{{$utilisateurs->Date_nais}}"name="Date_nais" ><br>
        <input type="text" value="{{$utilisateurs->CIN}}"name="CIN" placeholder="NUMERO DE CARTE D'IDENTITE NATIONAL"><br>
        <input type="text" value="{{$utilisateurs->Tel}}"name="Tel" placeholder="NUMERO DE TEL"><br>
        <input type="text" value="{{$utilisateurs->Domicile}}"name="Domicile" placeholder="QUELLE EST L'ADRESSE DE VOTRE DOMICILE?"><br>
        <input type="text" value="{{$utilisateurs->Email}}"name="Email" required placeholder="QUEL EST VOTRE EMAIL?"><br>
        <input type="password" value="{{$utilisateurs->Password}}"name="Password" required placeholder="ENREZ VOTRE MOT DE PASSE"><br>
        <input type="submit" value="UPDATE">
    </form>
    <form method="post" action="/utilisateurs/{{$utilisateurs->id}}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
    </form>
@endsection
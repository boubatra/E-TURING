@extends('layouts/_master')
@section('content')
<h1>Create Utilisateur</h1>    
<form method="post" action="/utilisateurs">
        @csrf
        <input type="text" name="Login" required placeholder="USERNAME"><br>
        <input type="text" name="Prenom" required placeholder="QUEL EST VOTRE PRENOM?"><br>
        <input type="text" name="Nom" required placeholder="QUEL EST VOTRE NOM?"><br>
        <input type="date" name="Date_nais" ><br>
        <input type="text" name="CIN" placeholder="NUMERO DE CARTE D'IDENTITE NATIONAL"><br>
        <input type="text" name="Tel" placeholder="NUMERO DE TEL"><br>
        <input type="text" name="Domicile" placeholder="QUELLE EST L'ADRESSE DE VOTRE DOMICILE?"><br>
        <input type="text" name="Email" required placeholder="QUEL EST VOTRE EMAIL?"><br>
        <input type="password" name="Password" required placeholder="ENREZ VOTRE MOT DE PASSE"><br>
        <input type="submit" value="CREATE">
    </form>
@endsection
@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:5% 0 8% 0;" class="hero-content">
    <h1 >Welkom User</h1>
</div>

@endsection

@section('main-content')

<div class="wrapper">
    <div class="admin-page">
        <div class="collegas">
            <h2>Alle collega's</h2>
            <ul>
                <li>Richard Harry <button><a href="">Wijzig</a></button> </li>
                <li>Richard Harry <button><a href="">Wijzig</a></button> </li>
                <li>Richard Harry <button><a href="">Wijzig</a></button> </li>
            </ul>
        </div>
        <div class="users">
            <h2>Alle gasten</h2>
            <ul>
                <li>Harry Man<button><a href="">Wijzig</a></button> </li>
                <li>Petty Vrouw <button><a href="">Wijzig</a></button> </li>
                <li>Richard Harry <button><a href="">Wijzig</a></button> </li>
            </ul>
        </div>
        <div class="info">
            <h2>Jou gegevens</h2>
            <ul>
                <li>Naam : <span>Harry</span> </li>
                <li>Achternaam : <span>Lepel</span> </li>
                <li>Adres : <span>Voorbeeld weg 30</span> </li>
                <li>Email : <span>Weg@weg.nl</span> </li>
                <li>Telefoonnummer : <span>06 55 75 52</span> </li>
            </ul>
        </div>
        <div class="button">
            <button><a href="">Wijzig</a></button>
        </div>
    </div>
</div>

@endsection
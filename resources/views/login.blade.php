@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('hero')
<div style=" display:none;" >
    
</div>

@endsection

@section('main-content')

<div class="wrapper">
    <div class="content">
        <div class="content-header">
            <button><a href="">Geen account?</a></button>
        </div>
        <div class="login">
            <h2>Login</h2>
            <form action="">
                <input type="text" placeholder="Gebruikersnaam ..">
                <input type="text" placeholder="Wachtwoord ..">
                <button><a href="">Gaan </a></button>
            </form>
            
        </div>
        <img src="{{asset('img/245e56a7844846a38a31dd087dcfbc2d.png')}}" alt="">
    </div>
</div>

@endsection
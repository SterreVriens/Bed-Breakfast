@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/kamer.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:5% 0 8% 0;" class="hero-content">
    <h1 >De Robijn kamer</h1>
</div>

@endsection

@section('main-content')

<div class="wrapper">
    <div class="text-image">
        <div class="image-button">
            <div class="color">
                <img src="{{ asset('img/33a2ef13fd9331064dc309b763475998.jpg')}}" alt="">
            </div>
            <button><a href="">Bekijk beschikbaarheid</a></button>
        </div>
        <div class="text">
            <p>
                Deze luxe tweepersoons kamer bevindt zich in onze gerestaureerde boerderij op de eerste verdieping. Deze kamer is sfeervol ingericht zodat het u aan niets ontbreekt. De kamer is voorzien van een tweepersoons bedstee, wekker radio, een garderobe kast, een tweepersoons zitje met TV en bureau om eventueel wat te kunnen schrijven, of voor uw eigen computer. Deze robijn kamer heeft een eigen douche, wastafel en toilet op de kamer
            </p>
        </div>
    </div>
    <div class="details">
        <div class="detail">
            <img src="{{ asset('img/100445.png')}}" alt=""><p>Deze kamer heeft 2 bedden</p>
        </div>
        <div class="line"></div>
        <div class="detail">
            <img src="{{ asset('img/1355223.png')}}" alt=""><p>Onbeperkt wifi inbegrepen</p>
        </div>
    </div>
</div>

@endsection
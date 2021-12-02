@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/onze-kamers.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:5% 0 8% 0;" class="hero-content">
    <h1 >Onze kamers</h1>
</div>

@endsection

@section('main-content')

<div class="wrapper wrapper-rooms">
    <h2 >
        Hier hebben we een overzicht van al onze kamers
    </h2>
    <div class="rooms">
        <div class="room">
            <div class="content">
                <img src="{{ asset('img/33a2ef13fd9331064dc309b763475998.jpg')}}" alt="">
                <h3>Robijn kamer</h3>
                <p>Deze luxe tweepersoons kamer bevindt zich op de eerste verdieping. Deze kamer is sfeervol ingericht zodat het u aan niets ontbreekt. De kamer is voorzien van een twee tweepersoons bedden wekker radio, een garderobe kast, een tweepersoons zitje met TV en bureau om eventueel wat te kunnen schrijven, of voor uw eigen computer.</p>
                <button><a href="{{route('kamer')}}">Lees meer ...</a></button>
            </div>
        </div>
        <div class="room">
            <div class="content">
                <img src="{{ asset('img/c17e02bb10a79e83cb2a29f9980dc9e4.jpg')}}" alt="">
                <h3>Robust kamer</h3>
                <p>Deze luxe tweepersoons kamer bevindt zich op de eerste verdieping. Deze kamer is sfeervol ingericht zodat het u aan niets ontbreekt. De kamer is voorzien van een twee tweepersoons bedden wekker radio, een garderobe kast, een tweepersoons zitje met TV en bureau om eventueel wat te kunnen schrijven, of voor uw eigen computer.</p>
                <button><a href="">Lees meer ...</a></button>
            </div>
        </div>
        <div class="room">
            <div class="content">
                <img src="{{ asset('img/78cf0d8f5c7a4f7c2ec1ed78261cbb85.jpg')}}" alt="">
                <h3>Smaragd kamer</h3>
                <p>Deze luxe tweepersoons kamer bevindt zich op de eerste verdieping. Deze kamer is sfeervol ingericht zodat het u aan niets ontbreekt. De kamer is voorzien van een twee tweepersoons bedden wekker radio, een garderobe kast, een tweepersoons zitje met TV en bureau om eventueel wat te kunnen schrijven, of voor uw eigen computer.</p>
                <button><a href="">Lees meer ...</a></button>
            </div>
        </div>
        <div class="room">
            <div class="content">
                <img src="{{ asset('img/c1c61b9814a172887d3a4cff351537aa.jpg')}}" alt="">
                <h3>Emerald kamer</h3>
                <p>Deze luxe tweepersoons kamer bevindt zich op de eerste verdieping. Deze kamer is sfeervol ingericht zodat het u aan niets ontbreekt. De kamer is voorzien van een twee tweepersoons bedden wekker radio, een garderobe kast, een tweepersoons zitje met TV en bureau om eventueel wat te kunnen schrijven, of voor uw eigen computer.</p>
                <button><a href="">Lees meer ...</a></button>
            </div>
        </div>
    </div>
</div>

@endsection
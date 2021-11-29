@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/over-ons.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:10% 0;" class="hero-content">
    <h1 >Over ons</h1>
</div>

@endsection

@section('main-content')
<div class="wrapper">
    <div class="text-image">
        <div class="text">
            <h2>Over het zonnetje</h2>
            <p>
                Wij, Jean en Marijohn, zijn in het jaar 1991, vol enthousiasme en na een 
                rigoureuze renovatie van het pand gelegen aan de Maastrichterlaan 81, begonnen met 
                de exploitatie van ons eigen café….Café Allure.
                Al doende vlogen de jaren voorbij en kreeg alles zijn vast ritme.
            </p>
            <br>
            <p>    
                Tot op de dag dat onze buren van Maastrichterlaan 79, verhuisden en hun huis te koop aanboden.
                Na heel wat wikken en wegen besloten we het pand van de buren te kopen en er een 
                Bed and Breakfast in te vestigen….B&B Het Zonnetje
            </p>
            <br>
            <p>    
                Onze verbouwingskriebels anno 1991 laaiden weer op, en met het enthousiasme van weleer, 
                liefde en eerbied voor het gebouw en z’n geschiedenis, hebben we het pand van november 2011 tot
                augustus 2012 gerenoveerd en verbouwd.
            </p>
        </div>
        <div class="image">
            <div class="color"></div>
            <img src="{{asset('img/c70bc77a3699c22580a5eebf6238be66.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="room-carousel">
    <img src="{{asset('img/6e7def64bd37cd57b9e62689055b95b2.jpg')}}" alt="">
    <img src="{{asset('img/33a2ef13fd9331064dc309b763475998.jpg')}}" alt="">
    <img src="{{asset('img/78cf0d8f5c7a4f7c2ec1ed78261cbb85.jpg')}}" alt="">
    <img src="{{asset('img/c1c61b9814a172887d3a4cff351537aa.jpg')}}" alt="">
    <img src="{{asset('img/c17e02bb10a79e83cb2a29f9980dc9e4.jpg')}}" alt="">
</div>

<div class="contact">
    <div class="wrapper">
        <div class="contact-left">
            <h3>Contact</h3>
            <div class="adress contact-item">
                <p class="contact-text"><img src="{{asset('img/house-icon-png-17.jpg')}}" alt=""> Voorbeeldstraat 124 4661AB Breda</p>
            </div>
            <div class="phoneNum contact-item">
                <p class="contact-text"> <img src="{{asset('img/free-phone-icon-1-thumb.png')}}" alt=""> +31 06 123 1234</p>
            </div>
            <div class="email contact-item"> 
                <p class="contact-text"> <img src="{{asset('img/2884956.png')}}" alt=""> Test@b&bhetzonnetje.nl</p>
            </div>
        </div>
        <div class="contact-right">
            <h3>Waar kunt u ons vinden?</h3>
            <img src="{{asset('img/google-maps-marker.png')}}" alt="">
        </div>
    </div>
</div>
@endsection
@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:5% 0 8% 0;" class="hero-content">
    <h1 >Welkom User</h1>
</div>

@endsection

@section('main-content')

<div class="wrapper">
    <div class="user-page">
        <div class="top">
           <h2>Jou oude reservaties: </h2> 
           <div class="reservations">
                <div class="reservation">
                    <div class="img">
                        <img src="{{ asset('img/33a2ef13fd9331064dc309b763475998.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Robijn kamer</h3>
                        <p>4 nachten</p>
                        <p class="p-thin">19-02-2021 t/m 23-01-2021</p>
                        <p class="p-price">Totaal: <span>$120,70</span></p>
                    </div>
                </div>
                <div class="reservation">
                    <div class="img">
                        <img src="{{ asset('img/33a2ef13fd9331064dc309b763475998.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Robijn kamer</h3>
                        <p>4 nachten</p>
                        <p class="p-thin">19-02-2021 t/m 23-01-2021</p>
                        <p class="p-price">Totaal: <span>$120,70</span></p>
                    </div>
                </div>
                <div class="reservation">
                    <div class="img">
                        <img src="{{ asset('img/33a2ef13fd9331064dc309b763475998.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Robijn kamer</h3>
                        <p>4 nachten</p>
                        <p class="p-thin">19-02-2021 t/m 23-01-2021</p>
                        <p class="p-price">Totaal: <span>$120,70</span></p>
                    </div>
                </div>
           </div>
        </div>
        <div class="bottem">
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
</div>

@endsection
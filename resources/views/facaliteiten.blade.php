@extends('layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/facaliteiten.css')}}">
@endsection

@section('hero')
<div style=" text-decoration:underline; padding:2% 0 8% 0;" class="hero-content">
    <h1 >Facaliteiten</h1>
</div>

@endsection

@section('main-content')

<div class="wrapper">
    <div class="item item-1">
        <div class="image">
            <div class="color">
                <img src="{{ asset('img/8981d07cb7c038b4f4906177f3e22f1c.jpg')}}" alt="">
            </div>
        </div>
        <div class="content">
            <h2>Wandeling in het bos</h2>
            <p>Omdat onze B&B zich bevindt in het bos , hebben op kleine afstand van ons gebouw verschillende bos paden voor een mooie wandeling. Bij de ingang van het zonnetje en op uw kamer kunt u verschillende brochure’s vinden voor een aantal mooie wandelingen</p>
        </div>
    </div>
    <div class="item item-2">
        <div class="content">
            <h2>Binnen zwembad</h2>
            <p>We hebben binnen op de begane vloer een 2000L verwarmd zwembad. Ons zwembad is voor al onze gasten bruikbaar, en per reservering kunt u ook 2 losse kaartjes bij kopen.</p>
        </div>
        <div class="image">
            <div class="color">
                <img src="{{ asset('img/b107de3865a086e549ea291a1fa38305.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="item item-3">
        <div class="image">
            <div class="color">
                <img src="{{ asset('img/c367c266f487bbd51450d5b328ad89fa.jpg')}}" alt="">
            </div>
        </div>
        <div class="content">
            <h2>Sport</h2>
            <p>We hebben binnen ook een kleine sportzaal met enkele apparaten . Deze zijn alleen toegangelijk voor onze B&B gasten.</p>
        </div>
    </div>
    <div class="item item-4">
        <div class="content">
            <h2>Fietsen door de bossen</h2>
            <p>Bij de ingang van onze B&B hebben we enkele mountain bikes staan die we verhuren. In de bossen zijn er verschillende paden die je kan volgen.</p>
        </div>
        <div class="image">
            <div class="color">
                <img src="{{ asset('img/e13ab1a90743f09ae0c366b437d1d146.jpg')}}" alt="">
            </div>
        </div>
        
    </div>
</div>

@endsection
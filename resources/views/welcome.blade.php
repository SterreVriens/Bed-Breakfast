@extends('Layout.main-layout')

@section('page-styling')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('hero')
<div class="hero-content">
    <div class="image">
        <img src="{{asset('img/hero.jpg')}}" alt="">
    </div>
    <div class="text">
        <h1>Lorum ipsum</h1>
    </div>
</div>

@endsection

@section('main-content')
    <div class="wrapper">
        <div class="cards">
            <div class="title">
                <h2>Lorum Ipsum Floks Hebr</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Consectetur numquam ullam eaque adipisci magni corporis. 
                    Similique facere porro delectus exercitationem repellendus molestiae consequuntur quaerat.
                </p>
            </div>
            <div class="cards-content">
                <div class="card">
                    <div class="card-content">
                        <img src="{{asset('img/c367c266f487bbd51450d5b328ad89fa.jpg')}}" alt="">
                        <h3> Donec sed interdum</h3>
                        <p> Quisque fermentum purus eu accumsan iaculis. Vivamus aliquet hendrerit aliquet. Proin elementum elit sed quam mattis tempus.</p>
                        <button><a href="">Lees meer...</a></button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img src="{{asset('img/890476627677cb6171ab98581d258fb6.jpg')}}" alt="">
                        <h3> Donec sed interdum</h3>
                        <p> Quisque fermentum purus eu accumsan iaculis. Vivamus aliquet hendrerit aliquet. Proin elementum elit sed quam mattis tempus.</p>
                        <button><a href="">Lees meer...</a></button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img src="{{asset('img/9c1029efc3c7603cfe4f5b007b46ecca.jpg')}}" alt="">
                        <h3> Donec sed interdum</h3>
                        <p> Quisque fermentum purus eu accumsan iaculis. Vivamus aliquet hendrerit aliquet. Proin elementum elit sed quam mattis tempus.</p>
                        <button><a href="">Lees meer...</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="testimonials">
        <div class="wrapper">
            <div class="testimonials-content">
                <h4>‘’</h4>
                <p>
                    Sed in viverra augue, a varius turpis. Aliquam non enim eu sapien eleifend 
                    vehicula quis vitae est. Duis a aliquam lacus, quis pulvinar ante. Aenean egestas ante eget 
                    odio volutpat ultrices. Donec nec finibus orci, non gravida enim.
                </p>
            </div>
        </div>
    </div>

    <div class="text-image">
        <div class="wrapper">
            <div class="image">
                <div class="color">
                </div>
                <img src="{{asset('img/97d7aa09c737e2036eb1cf2b935e4ef8.jpg')}}" alt="">
            </div>
            <div class="text">
                <h5>Lorum Ipsum</h5>
                <p> Integer vulputate lectus eu elit laoreet cursus. 
                    Vestibulum ornare, nulla eget dictum ornare, justo nulla consequat velit, vel tempor ligula mauris sit amet lorem. Aenean rhoncus sapien at nulla venenatis consectetur. 
                    In magna lacus, rutrum a massa accumsan, semper convallis quam. </p>
            </div>
        </div>
    </div>

@endsection
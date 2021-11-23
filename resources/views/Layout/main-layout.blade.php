<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main-layout.css')}}">
    @yield('page-styling')
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{asset('img/Bed_and_Breakfast-removebg-preview.png')}}" alt="">
            </div>
            <div class="links">
                <a href="">Home</a>
                <a href="">Over ons</a>
                <a href="">Facaliteiten</a>
                <a href="">Onze kamers</a>
                <button><a href="">Login</a></button>
            </div>
        </nav>
        <div class="hero">
            <div class="wrapper">
                @yield('hero')
            </div>
        </div>
    </header>
    <main>
        
            @yield('main-content')
        
    </main>
    <footer>
        <div class="wrapper">
            <div class="title">
                <h2>Hoe kunnen wij helpen?</h2>
                <h3>Neem vooral contact op!</h3>
            </div>
            <div class="list list-1">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Over ons</a></li>
                    <li><a href="">Facaliteiten</a></li>
                    <li><a href="">Onze kamers</a></li>
                </ul>
            </div>
            <div class="list list-2">
                <ul>
                    <li><h4>Adress</h4></li>
                    <li><p>Nep straat 239</p></li>
                    <li><p>Nederland</p></li>
                    <li><p>+31 6 123 1234</p></li>
                    <li><p>Test@voorbeeld.nl</p></li>
                </ul>
            </div>
            <div class="social-media">
                <img src="{{asset('img/snapchat-icon-vector-23.jpg')}}" alt=""><a href=""></a>\
                <img src="{{asset('img/instagram-icon-vector-27.jpg')}}" alt=""><a href=""></a>
                <img src="{{asset('img/37409-facebook-logo-icon-vector-icon-vector-eps.png')}}" alt=""><a href=""></a>
            </div>
        </div>
    </footer>
</body>
</html>
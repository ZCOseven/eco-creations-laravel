<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Jerarquias CSS -->
    <link rel="stylesheet" href="{{ asset('css/var.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    @stack('styles')
    @livewireStyles
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <svg class="logo-icon" f width="50" height="50" viewBox="0 0 50 50" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="logo-icon-path" fill-rule="evenodd" clip-rule="evenodd"
                    d="M22.803 41.5628C-2.76167 39.8171 -1.27548 0.772845 1.4 0.249346C4.07547 -0.274153 18.9367 2.28592 24.8836 17.7057C31.4228 2.8678 44.499 -1.11032 48.6626 0.249346C51.3355 1.12218 52.5246 38.9443 26.667 41.5628V49.4181C26.4689 49.6121 25.8348 50 24.8836 50C23.9324 50 23.1002 49.6121 22.803 49.4181V41.5628ZM22.803 38.3624C18.3437 37.5866 11.6303 35.744 7.34677 26.7248C3.0632 17.7057 3.2822 5.00137 4.07483 3.44969C10.6155 5.09835 23.5181 12.0615 22.803 26.7248C21.3146 22.6517 12.6947 14.2145 12.1003 13.9235C11.5058 13.6326 10.66 13.5876 10.0196 14.2145C9.37915 14.8413 9.68686 15.9601 10.0196 16.251C10.3523 16.542 23.0981 27.8886 22.803 38.3624ZM42.4185 26.7248C36.7141 36.7332 29.7374 38.6534 26.9622 38.3624C27.9854 27.0953 36.7135 19.2757 39.3166 16.9437C39.7382 16.5659 39.9992 16.3321 40.0406 16.251C40.4077 15.5324 40.3339 14.7725 39.7434 14.2145C39.0753 13.5831 37.96 13.8274 37.3655 14.2145C36.771 14.6015 29.9345 20.6151 26.9622 26.7248C27.1983 12.0615 39.7427 4.90439 45.9854 3.44969C45.9854 3.44969 48.1229 16.7165 42.4185 26.7248Z" />
            </svg>
            <h1 class="logo-name">ECOCREATIONS</h1>
        </a>
        <nav class="nav">
            <ul class="list">
                <li class="list-item"><a class="link" href="{{route('home')}}">Inicio</a></li>
                <li class="list-item"><a class="link active" href="{{route('productos.index')}}">Productos</a></li>
                <li class="list-item"><a class="link" href="{{route('about')}}">Nosotros</a></li>
                <li class="list-item"><a class="link" href="{{route('contact')}}">Contacto</a></li>
                <li class="list-item cart-link show-cart">
                    <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.822 7.431C21.73 7.29808 21.6072 7.18943 21.464 7.11436C21.3209 7.0393 21.1616 7.00006 21 7H7.333L6.179 4.23C6.02769 3.86523 5.77147 3.55359 5.44282 3.33462C5.11418 3.11564 4.72791 2.99918 4.333 3H2V5H4.333L9.077 16.385C9.15299 16.5672 9.28118 16.7228 9.44542 16.8322C9.60967 16.9416 9.80263 17 10 17H18C18.417 17 18.79 16.741 18.937 16.352L21.937 8.352C21.9937 8.20063 22.0129 8.03776 21.9928 7.87735C21.9728 7.71695 21.9142 7.56379 21.822 7.431ZM17.307 15H10.667L8.167 9H19.557L17.307 15Z"
                            fill="#1B1F27" />
                        <path
                            d="M10.5 21C11.3284 21 12 20.3284 12 19.5C12 18.6716 11.3284 18 10.5 18C9.67157 18 9 18.6716 9 19.5C9 20.3284 9.67157 21 10.5 21Z"
                            fill="#1B1F27" />
                        <path
                            d="M17.5 21C18.3284 21 19 20.3284 19 19.5C19 18.6716 18.3284 18 17.5 18C16.6716 18 16 18.6716 16 19.5C16 20.3284 16.6716 21 17.5 21Z"
                            fill="#1B1F27" />
                    </svg>
                    <p class="count-product">0</p>
                </li>
            </ul>

            <!--Icono de Menú mobile -->
            <button class="btn-show-menu" id="btn-show-menu">
                <div></div>
                <div></div>
                <div></div>
            </button>
        </nav>
    </header>
    
    @livewire('carrito')

    <ul class="list-mobile">
        <li class="list-item"><a class="link" href="{{route('home')}}">Inicio</a></li>
        <li class="list-item"><a class="link active" href="{{route('productos.index')}}">Productos</a></li>
        <li class="list-item"><a class="link" href="{{route('about')}}">Nosotros</a></li>
        <li class="list-item"><a class="link" href="{{route('contact')}}">Contacto</a></li>
        <li class="list-item cart-link show-cart">
            <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.822 7.431C21.73 7.29808 21.6072 7.18943 21.464 7.11436C21.3209 7.0393 21.1616 7.00006 21 7H7.333L6.179 4.23C6.02769 3.86523 5.77147 3.55359 5.44282 3.33462C5.11418 3.11564 4.72791 2.99918 4.333 3H2V5H4.333L9.077 16.385C9.15299 16.5672 9.28118 16.7228 9.44542 16.8322C9.60967 16.9416 9.80263 17 10 17H18C18.417 17 18.79 16.741 18.937 16.352L21.937 8.352C21.9937 8.20063 22.0129 8.03776 21.9928 7.87735C21.9728 7.71695 21.9142 7.56379 21.822 7.431ZM17.307 15H10.667L8.167 9H19.557L17.307 15Z"
                    fill="#1B1F27" />
                <path
                    d="M10.5 21C11.3284 21 12 20.3284 12 19.5C12 18.6716 11.3284 18 10.5 18C9.67157 18 9 18.6716 9 19.5C9 20.3284 9.67157 21 10.5 21Z"
                    fill="#1B1F27" />
                <path
                    d="M17.5 21C18.3284 21 19 20.3284 19 19.5C19 18.6716 18.3284 18 17.5 18C16.6716 18 16 18.6716 16 19.5C16 20.3284 16.6716 21 17.5 21Z"
                    fill="#1B1F27" />
            </svg>
            <p class="count-product">0</p>
        </li>
    </ul>

    <main>
        @yield('content') <!-- Contenido que se añadira dinamicamente -->
    </main>

    <footer class="footer">
        <article class="footer__container">
            <section class="footer__comunicate">
                <h3 class="footer__title">Comunícate con nosotros</h3>
                <div class="footer__frame-group">
                    <img class="footer__icon" src="{{ asset('img/footer/message.png') }}" alt="message">
                    <div class="footer__text-group">
                        <h4 class="footer__subtitle">Asistencia virtual</h4>
                        <p class="footer__description">Te atenderá las 24 hrs</p>
                    </div>
                </div>
                <div class="footer__frame-group">
                    <img class="footer__icon" src="{{ asset('img/footer/mail.png') }}" alt="mail">
                    <div class="footer__text-group">
                        <h4 class="footer__subtitle">Escríbenos</h4>
                        <p class="footer__description">Estamos para ayudarte</p>
                        <a href="#" class="footer__link--mail">ecocreations@contact.com</a>
                    </div>
                </div>
                <div class="footer__frame-group">
                    <img class="footer__icon" src="{{ asset('img/footer/phone.png') }}" alt="phone">
                    <div class="footer__text-group">
                        <h4 class="footer__subtitle">Llámanos</h4>
                        <p class="footer__description">Centro de servicio al cliente en Lima y</p>
                        <p class="footer__description">provincia: (01) 6437 000</p>
                    </div>
                </div>
                <div class="footer__frame-group">
                    <img class="footer__icon" src="{{ asset('img/footer/store.png') }}" alt="store">
                    <div class="footer__text-group">
                        <h4 class="footer__subtitle">Visítanos</h4>
                        <p class="footer__description">Revisa aquí nuestros horarios y tiendas</p>
                        <p class="footer__description">disponibles a nivel nacional</p>
                        <a href="#" class="footer__link--mail">Ver tiendas</a>
                    </div>
                </div>
            </section>

            <section class="footer__map">
                <h3 class="footer__title">Mapa</h3>
                <div class="footer__frame-group">
                    <a href="{{route('home')}}" class="footer__link--enlaces">Inicio</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('productos.index')}}" class="footer__link--enlaces">Productos</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('about')}}" class="footer__link--enlaces">Nosotros</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('contact')}}" class="footer__link--enlaces">Contacto</a>
                </div>
            </section>

            <section class="footer__categories">
                <h3 class="footer__title">Categorías</h3>
                <div class="footer__frame-group">
                    <a href="{{route('productos.index')}}" class="footer__link--enlaces">Botellas</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('productos.index')}}" class="footer__link--enlaces">Bolsas</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('productos.index')}}" class="footer__link--enlaces">Hogar</a>
                </div>
                <div class="footer__frame-group">
                    <a href="{{route('productos.index')}}" class="footer__link--enlaces">Accesorios</a>
                </div>
            </section>

            <section class="footer__nosotros">
                <figure>
                    <img src="{{ asset('img/footer/isotipo.png') }}" alt="isotipo" width="50px" height="50px">
                </figure>
                <h3 class="footer__title footer__title--nosotros">ECOCREATIONS</h3>
                <p>ECOCREATIONS S.A.C. abrió sus puertas en 2004, transformando el concepto de productos ecológicos
                    personalizados. Fabricamos y comercializamos artículos sostenibles, como botellas reutilizables y
                    bolsas ecológicas, promoviendo la economía circular y reduciendo el impacto ambiental.</p>
            </section>
        </article>

        <article class="footer__credits">
            <section class="footer__social">
                <h3 class="footer__title--social">Nuestras Redes Sociales:</h3>
                <div class="footer__group--redes">
                    <a href="#">
                        <img src="{{ asset('img/footer/facebook.png') }}" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/footer/twitter.png') }}" alt="twitter">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/footer/youtube.png') }}" alt="youtube">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/footer/instagram.png') }}" alt="instagram">
                    </a>
                </div>
            </section>
            <section class="footer__copyright">
                <p>© 2025 ECOCREATIONS S.A.C. Derechos parcialmente Reservados</p>
            </section>
        </article>
    </footer>

    <script src="{{ asset('js/headerMobile.js') }}"></script>
    @livewireScripts
    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
@extends('layouts.app')
@section('title', 'About us')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush


@section('content')

<h1>NOSOTROS</h1>
<section class="c-p-mision-vision">
    <section class="c-mision">
        <h2>Misión</h2>
        <p>En EcoCreations, nos dedicamos a ofrecer productos innovadores y sostenibles elaborados a
            partir de materiales ecológicos, comprometidos con la preservación del medio ambiente. Nuestra
            misión es reducir la huella ecológica global promoviendo alternativas responsables y accesibles para
            cada hogar y negocio. Trabajamos con pasión para crear un futuro más verde, proporcionando a
            nuestros clientes opciones que les permitan contribuir activamente a la protección de nuestros
            ecosistemas.</p>
    </section>
    <section class="c-titulo-img">
        <!-- <img src="../img/nosotros/imagen3.png" alt=""> -->
        <img src="{{ asset('img/nosotros/imagen3.png') }}" alt="Img">
    </section>
    <section class="c-vision">
        <h2>Visión</h2>
        <p>Ser una empresa líder en la producción y comercialización de productos ecológicos, reconocida por su
            compromiso con el medio ambiente y su impacto positivo en la lucha contra el cambio climático.
            Aspiramos a ser un referente en la industria, inspirando a comunidades y empresas a elegir opciones
            más sostenibles para proteger el planeta, y así contribuir a un futuro más limpio, saludable y
            equilibrado para las generaciones venideras.</p>
    </section>
</section>
<section class="c-p-valores">
    <section>
        <img src="{{ asset('img/nosotros/compromiso-valor.png') }}" alt="img">
    </section>
    <section>
        <img src="{{ asset('img/nosotros/innovacion-valor.png') }}" alt="img">
    </section>
    <section>
        <img src="{{ asset('img/nosotros/personalización-valor.png') }}" alt="img">
    </section>
    <section>
        <img src="{{ asset('img/nosotros/transparencia-valor.png') }}" alt="img">
    </section>
</section>

@endsection
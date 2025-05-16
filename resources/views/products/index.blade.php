@extends('layouts.app')
@section('title', 'Productos')

@push('styles')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endpush

@section('content')
<section class="nav-category">
    <ul class="list list-custom-nav-category">
        <li class="dropdown-hover">
            <p class="list-title">Accesorios</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Accesorios</li>
                <li><a class="category" href="#">electronics</a></li>
                <li><a href="#">Collares</a></li>
                <li><a href="#">Llaveros</a></li>
                <li><a href="#">Aretes</a></li>
                <li><a href="#">Tobilleras</a></li>
                <li><a href="#">Diadernas</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Árticulos</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Árticulos</li>
                <li><a class="category" href="#">jewelery</a></li>
                <li><a href="#">Collares con fecha</a></li>
                <li><a href="#">Accesorios</a></li>
                <li><a href="#">Packs para eventos</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Regalos</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Regalos</li>
                <li><a class="category" href="#">men's clothing</a></li>
                <li><a href="#">Kits para fechas especiales</a></li>
                <li><a href="#">Bolsitas ecológicas</a></li>
                <li><a href="#">Tarjetas con semillas</a></li>
                <li><a href="#">Regalos corporativos</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Artesanales</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Artesanales</li>
                <li><a class="category" href="#">women's clothing</a></li>
                <li><a href="#">Textiles</a></li>
                <li><a href="#">Carámica y arcillas</a></li>
                <li><a href="#">Madera</a></li>
                <li><a href="#">Papel y cartón</a></li>
                <li><a href="#">Elementos para decoración</a></li>
            </ul>
        </li>
    </ul>
</section>
<section class="containerProducts">
    <!-- AQUI SE MUESTRA TODOS LOS PRODUCTOS -->
    @foreach($products as $pro)
        <x-product-card :pro="$pro"></x-product-card>
    @endforeach
</section>

@endsection
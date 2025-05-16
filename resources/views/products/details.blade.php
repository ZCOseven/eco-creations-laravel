@extends('layouts.app')
@section('title', 'Detalle del Producto')

@push('styles')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
@endpush

@section('content')
<x-product-detail-component :pro=$product />

@endsection
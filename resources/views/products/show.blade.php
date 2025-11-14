@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')
<div class="container product-detail">

    <div class="image-section">
        <img src="https://via.placeholder.com/350x350?text=Producto" alt="Producto">
    </div>

    <div class="details">
        <h1>Producto ejemplo</h1>
        <p class="price">$49.99</p>

        <p>Descripción detallada del producto. Este artículo es de alta calidad y tiene excelente rendimiento.</p>

        <ul>
            <li>Característica 1 destacada</li>
            <li>Característica 2 destacada</li>
            <li>Característica 3 destacada</li>
        </ul>

        <button class="button">Agregar al carrito</button>
    </div>

</div>
@endsection

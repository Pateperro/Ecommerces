@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="container">

    <h1>Lista de productos</h1>

    <a href="{{ route('admin.products.createAdmin') }}" class="btn">Crear producto</a>

    <div class="product-list">
        <p>Aquí irá la lista de productos.</p>
    </div>

</div>
@endsection

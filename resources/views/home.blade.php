@extends('layouts.app')

@section('content')

<div class="home-container">
    <header class="home-header">
        <h1 class="home-title">Bienvenido a tu panel</h1>
        <p class="home-subtitle">Gestión de productos - UNAB</p>
    </header>

    <div class="dash-actions">
        <a href="{{ url('products') }}" class="btn">Ver productos</a>
        <a href="{{ route('products.create') }}" class="btn btn--ghost">Crear producto</a>

        <form action="{{ route('logout') }}" method="POST" style="margin-left:auto">
            @csrf
            <button type="submit" class="btn btn--ghost">Cerrar sesión</button>
        </form>
    </div>
</div>
@endsection
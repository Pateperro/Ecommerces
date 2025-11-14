@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="form-container">
    <h1>Crear nuevo producto</h1>

    <form action="" method="POST">
        @csrf

        <label>Nombre del producto</label>
        <input type="text" name="name" placeholder="Ej. Audífonos Bluetooth" required>

        <label>Precio</label>
        <input type="number" name="price" placeholder="Ej. 59.99" required>

        <label>Descripción</label>
        <textarea name="description" placeholder="Escribe una descripción del producto"></textarea>

        <label>URL de la imagen</label>
        <input type="text" name="image" placeholder="https://...">

        <button type="submit">Guardar producto</button>
    </form>
</div>
@endsection

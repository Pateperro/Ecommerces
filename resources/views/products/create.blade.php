@extends('admin.layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="container my-5">
    <div class="card mx-auto shadow-sm" style="max-width: 600px;">
        <div class="card-body">

            <h1 class="text-center mb-4">Crear nuevo producto</h1>

            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf

                <!-- Nombre del producto -->
                <div class="input-group input-group-outline is-filled mb-4">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Ej. Audífonos Bluetooth" 
                        value="{{ old('name') }}" required>
                </div>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Descripción -->
                <div class="input-group input-group-outline is-filled mb-4">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Escribe una descripción del producto">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Precio -->
                <div class="input-group input-group-outline is-filled mb-4">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Ej. 59.99" 
                        value="{{ old('price') }}" required>
                </div>
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Categoría -->
                <div class="input-group input-group-outline is-filled mb-4">
                    <select name="category" class="form-control" required>
                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>-- Select Category --</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}" {{ old('category') == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Brand -->
                <div class="input-group input-group-outline is-filled mb-4">
                    <select name="brand" class="form-control" required>
                        <option value="" disabled {{ old('brand') ? '' : 'selected' }}>-- Select Brand --</option>
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}" {{ old('brand') == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('brand')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <!-- Botón Guardar -->
                <button type="submit" class="btn bg-gradient-primary w-100">
                    Create Product
                </button>

            </form>
        </div>
    </div>
</div>
@endsection

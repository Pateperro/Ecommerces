@extends('admin.layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="container my-5">
        <div class="card mx-auto shadow-sm" style="max-width: 600px;">
            <div class="card-body">

                <h1 class="text-center mb-4">Crear nuevo producto</h1>

                <form action="{{route('admin.products.store')}}" method="POST">
                    @csrf

                    <!-- Nombre del producto -->
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline is-filled mb-4">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Ej. Audífonos Bluetooth" 
                            required>
                    </div>

                    <!-- Descripción -->
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline is-filled mb-4">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Escribe una descripción del producto"></textarea>
                    </div>

                    <!-- Precio -->
                    @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline is-filled mb-4">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Ej. 59.99" required>
                    </div>

                    <!-- Categoría -->
                    @error('Category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline is-filled mb-4">
                        <select name="category" class="form-control" required>
                            <option value="" disabled selected>-- Select Category --</option>
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Brand -->
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline is-filled mb-4">
                        <label class="form-label">Brand</label>
                        <select name="brand" class="form-control" required>
                            <option value="" disabled selected>-- Select Brand --</option>
                            @foreach ($brands as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botón Guardar -->
                    <button type="submit" class="btn bg-gradient-primary w-100">
                        Create Product
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection

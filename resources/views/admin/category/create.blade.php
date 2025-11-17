@extends('admin.layouts.app')

@section('content')
    <h1>Add new Category</h1>

    <div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la categoría</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Ej. Electrónica">
            </div>

            <button type="submit" class="btn btn-success w-100">
                Guardar
            </button>

        </form>

    </div>
</div>


    

@endsection
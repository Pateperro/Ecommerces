@extends('admin.layouts.app')

@section('content')
    <h1>Add new Category</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.category.store')}}" method="post">
                @csrf
                <div class="input-group input-gorup-outline mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>              
                <input type="submit" class="btn bg-gradient-succes" value="save">
            </form>
        </div>
    </div>


    

@endsection
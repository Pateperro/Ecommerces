@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3>Products List</h3>

                     <a type="button" class="btn btn-succes" href="{{route('admin.products.create')}}">Add new product</a>

            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        {{--                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th> --}} <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="align-middle text-center">{{ $product->id }}</td>
                            <td class="align-middle text-center">{{ $product->name }}</td>
                            {{-- <td class="align-middle text-center">{{ $product->description }}</td> --}}
                            <td class="align-middle text-center">{{ $product->category_id }}</td>
                            <td class="align-middle text-center">{{ $product->brand_id }}</td>
                            <td class="align-middle text-center">{{ $product->price }}</td>
                            <td class="align-middle text-center">{{ $product->created_at }}</td>
                            <td class="align-middle text-center">{{ $product->Updated_at }}</td>
                            <td class="align-middle text-center"><a href="#">Eliminar</a> </td>

                            </td>
                        </tr>
                    @endforeach


                </tbody>



            </table>

            {{$products->links()}}

        </div>
    </div>
@endsection

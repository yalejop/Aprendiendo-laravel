@extends('layouts.main')
@section('contenido')

<div class="container"><br>    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Listado de productos
                    <a class="btn btn-success btn-sm float-right" href="{{ route('products.create') }}">Nuevo Producto</a>
                </div>
                <div class="card-body">
                    @if(session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                    @endif    
                    <table class="table table-over sm">
                        <thead>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                            <tr>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="javascript: document.getElementById('delete-{{ $product->id }}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
                                    <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
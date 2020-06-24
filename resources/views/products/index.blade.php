<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">    
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
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                            <tr>
                                <td>
                                    {{ $product->description }}
                                </td>
                                <td>
                                    {{ $product->price }}
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

</body>
</html>
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
                    Crear Producto
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
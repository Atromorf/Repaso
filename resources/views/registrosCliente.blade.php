@extends('barra')

@section('contenido')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
@if (session('confirma'))
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Guardado correctamente</strong> El usuario {{session('confirma')['nombre']}} a sido agregado
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
        
@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5">Registrar</h1>

    <div class="card text-center mb-5">

        <div class="card-header">
            <strong>Usuario Nuevo</strong>
        </div>

        <div class="card-body">
            
            <form method="POST" action="{{ route('clientes.store')}}">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" name="txtNombre" value="{{old('txtNombre')}}" placeholder="Nombre Completo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNombre') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtEmail" value="{{old('txtEmail')}}" placeholder="Email">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmail') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="number" name="txtINE" value="{{old('txtINE')}}" placeholder="Numero de INE">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtINE') }} </p>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Libro</button>
                </div>
            
            </form>
        
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
@stop
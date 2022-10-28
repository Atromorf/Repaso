@extends('barra')

@section('contenido')

@if (session('confirmacion'))
    
    <script> Swal.fire(
        'Todo correcto!',
        'El libro {{session('confirmacion')['titulo']}} se a Guardado!',
        'success'
        ) </script>
        
@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5">Ingresar</h1>

    <div class="card text-center mb-5">

        <div class="card-header">
            <strong>Biblioteca</strong>
        </div>

        <div class="card-body">
            
            <form method="POST" action="guardarLibro">
                @csrf

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input required class="form-control" type="text" name="txtISBN" value="{{old('txtISBN')}}" placeholder="ISBN">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtISBN') }} </p>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="text" name="txtTitulo" value="{{old('txtTitulo')}}" placeholder="Titulo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="text" name="txtAutor" value="{{old('txtAutor')}}" placeholder="Autor">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtAutor') }} </p>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="number" name="txtPaginas" value="{{old('txtPaginas')}}" placeholder="Paginas">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPaginas') }} </p>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="text" name="txtEditorial" value="{{old('txtEditorial')}}" placeholder="Editorial">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                </div>

                <div class="mb-3">
                    <input required class="form-control" type="text" name="txtEmail" value="{{old('txtEmail')}}" placeholder="Email">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmail') }} </p>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Libro</button>
                </div>
            
            </form>
        
        </div>

    </div>

</div>    

@stop
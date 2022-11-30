@extends('barra')

@section('contenido')

@include('ModalActualizarF')

@include('ModalEliminarF')

@if (session()->has('confirmar'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu recuerdo se agrego satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('confirma'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu recuerdo se elimino satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('confirmacion'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu Formulario se actualizo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

<h1 class="display-4 text-center mt-5 mb-5">Formularios</h1>

    @foreach($resultForm as $consulta)
<div class="container col-md-6">

    <div class="card text-center mb-5">

        <div class="card-body">
        
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:brown">
                <p class="text-white  fst-italic">{{$consulta->fecha}}</p>
            </div>

            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->ismn}}

            </div>
            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->titulo}}

            </div>
            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->autor}}

            </div>
            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->paginas}}
            </div>
            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->editorial}}
            </div>
            <div class="mb-2 text-gray-600 white:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$consulta->email}}
            </div>

            <div class="card-footer">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->idFormulario}}">
                    Editar <i class="bi bi-pen"></i>
                  </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->idFormulario}}">
                    Eliminar
                  </button>
                </form>
            </div>
        </div>
    
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</div>
@endforeach
@stop

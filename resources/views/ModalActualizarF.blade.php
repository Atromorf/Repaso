@foreach($resultForm as $consulta)
<!-- Modal -->
<div class="modal fade" id="ModalActualizar{{$consulta->idFormulario}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar{{$consulta->idFormulario}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualiza tu recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('formulario.update',$consulta->idFormulario)}}">
                @csrf
                @method('PUT')

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtISBN" value="{{$consulta->ismn}}" placeholder="ISBN">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtISBN') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtTitulo" value="{{$consulta->titulo}}" placeholder="Titulo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTitulo') }} </p>
                </div>
                
                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                  <input class="form-control" type="text" name="txtAutor" value="{{$consulta->autor}}" placeholder="Autor">

                  <p class="text-danger  fst-italic"> {{ $errors->first('txtAutor') }} </p>
                </div>
              
                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                <input class="form-control" type="number" name="txtPaginas" value="{{$consulta->paginas}}" placeholder="Paginas">

                <p class="text-danger  fst-italic"> {{ $errors->first('txtPaginas') }} </p>
                </div>
                
                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                <input class="form-control" type="text" name="txtEditorial" value="{{$consulta->editorial}}" placeholder="Editorial">

                <p class="text-danger  fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                </div>
                
                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                <input class="form-control" type="email" name="txtEmail" value="{{$consulta->email}}" placeholder="Email">

                <p class="text-danger  fst-italic"> {{ $errors->first('txtEmail') }} </p>
                </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Actualizar Formulario</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endforeach
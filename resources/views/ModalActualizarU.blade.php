@foreach($resultClient as $vista)
<!-- Modal -->
<div class="modal fade" id="ModalActualizar{{$vista->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar{{$vista->idCliente}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualiza tu recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('clientes.update',$vista->idCliente)}}">
                @csrf
                @method('PUT')

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtNombre" value="{{$vista->nombre}}" placeholder="Nombre del Usuario">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNombre') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="email" name="txtEmail" value="{{$vista->email}}" placeholder="Email">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmail') }} </p>
                </div>
                
                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                  <input class="form-control" type="number" name="txtINE" value="{{$vista->ine}}" placeholder="INE">

                  <p class="text-danger  fst-italic"> {{ $errors->first('txtINE') }} </p>
                </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Actualizar Usuario</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endforeach
@foreach($resultForm as $consulta)
<!-- Modal -->
<div class="modal fade" id="ModalEliminar{{$consulta->idFormulario}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminar{{$consulta->idFormulario}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Elimina tu Formulario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('formulario.destroy',$consulta->idFormulario)}}">
            @csrf
            @method('DELETE')
    
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:brown">
                <p class="text-white  fst-italic">{{$consulta->fecha}}</p>
            </div>

            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->ismn}}

            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->titulo}}

            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->autor}}

            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->paginas}}
            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->editorial}}
            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
              {{$consulta->email}}
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Si...,Borralo</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
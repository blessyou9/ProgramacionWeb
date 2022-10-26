@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Llenar formulario</h1>
<br>
<div>
    <div>

        <div class="text-center">
            Comic-Con <i class="bi bi-wechat"></i>
        </div>

    <div>
        <form method="post" action="consulta">
            @csrf
            <div>
                <label class="form-label" name="labelTitulo">Titulo: </label>   
                <input type="text" class="form-control" name="txtTitulo">
            </div>

            <div>
                <label class="form-label" name="labelEdicion">Edición: </label>   
                <input type="text" class="form-control" name="txtEdicion">
            </div>

            <div>
                <label class="form-label" name="labelDescripcion">Descripción: </label> 
                <textarea class="form-control" name="txtDescripcion" rows="7"></textarea>
            </div>
    </div>
  
    <div>
        <button type="submit" name="btnGuardar">Guardar</button>
    </div>   
        </form>

    </div>
</div>    
<br>
@stop
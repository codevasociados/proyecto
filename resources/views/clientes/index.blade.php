@extends('layouts.app')
@section('titulo')

cliente

@endsection
@section('css')
{!! Html::style('dynatable/jquery.dynatable.css') !!}

@endsection

@section('js')
{!! Html::script('dynatable/jquery-1.7.2.min.js') !!}
{!! Html::script('dynatable/jquery.dynatable.js') !!}

<script type="text/javascript">
  $(document).on('ready', function(){

      var clientes={!! json_encode($clientes->toArray()) !!}; //llama a l registro
      for (var i = 0; i < clientes.length; i++) {
        var id=clientes[i].id;
        clientes[i].boton='<button onclick="javascript:pasa('+id+')" type="button" data-toggle="modal" data-target="#myModal3" class="btn btn-danger col-sd-3" style="float:right">eliminar</button>';


      }
      console.log(clientes); //para saver que variable nos manda
      $('#cliente').dynatable({
        dataset:{

          records:clientes
        },

      });





  });

function pasa (id)
{
  $('#id').val(id);
}

</script>
@endsection

@section('contenido')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">

    <p></p>
    <h1>Lista de clientes</h1>


    <p> </p><p> </p>

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Lista de clientes</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-sm btn-primary btn-create">Nuevo Registro</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">

                <table class="table table-striped table-bordered table-list" id="cliente">
                  <thead>
                    <tr>

                        <td data-dynatable-column="NOM_CLIE">Nombre</td>
                        <td  data-dynatable-column="PAT_CLIE">Apellido Paterno</td>
                        <td  data-dynatable-column="MAN_CLIE">apellido Materno</td>
                        <td data-dynatable-column="TEL_CLIE">Telefono Cliente</td>
                        <td data-dynatable-column="boton">accion</td>


                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>

              </div>
              <div class="panel-footer">
                <div class="row">

                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
<!-- Bookmark form -->



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">

          <form id="SUPER_FORM" method="post" action="{{route('cliente.store')}}">


              {{csrf_field()}}
          <input type='submit'>


            <div class="form-group">
                <label for="nombre"> CI </label>
                <input name="ci" class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre"> nombre </label>
                <input name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="edad"> apellido paterno </label>
                <input name="apellido paterno" class="form-control" type="integer">
            </div>
            <div class="form-group">
                <label for="edad"> apellido materno </label>
                <input name="apellido materno" class="form-control" type="integer">
            </div>
            <div class="form-group">
                <label for="edad"> Telefono </label>
                <input name="Telefono" class="form-control" type="integer">
            </div>

          </form>

    </div>

    <div class="modal-footer">

        <button type="submit" form="SUPER_FORM" class="btn btn-primary">Guardar</button>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



 </form>


 <div id="myModal3" class="modal fade" role="dialog">

   <div class="modal-dialog">

     <div class="modal-content">
       <!--Cabecera del modal-->
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Elimnar Trabajo</h4>
       </div>

       <div class="modal-body">
         <form action="{{route('cliente.elimina')}}"method="post">
          <input type="hidden" name="id" value="" id="id">
  {{csrf_field()}}
           <p><h1>¿Esta seguro?</p></h>
           <p><h3>Se borrara permanentemente!</p></h3>


       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
       </div>
     </div>
   </div>
 </div>
  </form>



@endsection

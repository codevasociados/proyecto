@extends('layouts.app')
@section('titulo')
Admins
@endsection
@section('css')
  {!! Html::style('dynatable/jquery.dynatable.css')!!}
@endsection
@section('contenido')

<div class="container-fluid">
  <div class="well" style="background-color: #fff;">

    <div class="panel-heading" >Tabla de Administradores</div>
      <div class="panel-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modcliente">Registro</button>
        <button type="button" class="btn btn-success">+</button>
        <!-- Modal -->
    <div id="modcliente" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registro de administradores</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{route('admin.store')}}">
              {{csrf_field()}}
              <div class="form-group">
                <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Nombre: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="nom_clie" name="nom_adm"
                         placeholder="Nombre">
                </div>
              </div>
              <div class="form-group">
                <label name="pat_adm" for="pat_clie" class="col-lg-4 control-label">Paterno: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="pat_clie"  name="pat_adm"
                         placeholder="Paterno">
                </div>
              </div>
              <div class="form-group">
                <label name="mat_adm" for="mat_clie" class="col-lg-4 control-label">Materno: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="mat_clie"  name="mat_adm"
                         placeholder="Materno">
                </div>
              </div>
              <div class="form-group">
                <label name="dir_adm" for="ci_clie" class="col-lg-4 control-label">Direccion: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="ci_clie"  name="dir_adm"
                         placeholder="Direccion">
                </div>
              </div>
              <div class="form-group">
                <label name="ci_adm" for="tel_clie" class="col-lg-4 control-label">C.I.: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="tel_clie"  name="ci_adm"
                         placeholder="Cedula">
                </div>
              </div>
              <div class="form-group">
                <label name="tel_adm" for="tel_clie" class="col-lg-4 control-label">Telefono: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="tel_clie"  name="tel_adm"
                         placeholder="Telefono">
                </div>
              </div>
              <div class="form-group">
                <label name="nivel_adm" for="tel_clie" class="col-lg-4 control-label">Nivel: </label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="tel_clie"  name="nivel_adm"
                         placeholder="telefono">
                </div>
              </div>
              <div class="center-block">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#cliente">Registrar</button>
              </div>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <!--fin del Modal content-->
    <!-- Modal -->
    <div id="eliminaMod" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ELIMAR ADMINISTRADOR</h4>
          </div>
          <div class="modal-body">
            <p>Esta seguro de eliminar al administrador?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger">ELIMINAR</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div
    <!--fin del Modal content-->
    <br>
    <div class="table-responsive">
      <table class="table" id="admin">
        <thead>
          <tr>
            <td>ID</td><td data-dynatable-column="NOM_ADM">NOMBRE</td>
            <td data-dynatable-column="PAT_ADM">PATERNO</td>
            <td data-dynatable-column="MAT_ADM">MATERNO</td>
            <td data-dynatable-column="DIR_ADM">DIRECCION</td>
            <td data-dynatable-column="CI_ADM">C.I.</td>
            <td data-dynatable-column="TEL_ADM">TELEFONO</td>
            <td data-dynatable-column="NIVEL_ADM">NIVEL</td>
            <td data-dynatable-column="boton">ELIMINAR</td>
          </tr>
        </thead>
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
  </div>




      </div>



</div>




</div>

@endsection
@section('js')
  {!! Html::script('dynatable/jquery-1.7.2.min.js')!!}
  {!! Html::script('dynatable/jquery.dynatable.js')!!}
  <script type="text/javascript">
    $(document).on('ready', function(){
      var admins={!! json_encode($admins->toArray())!!};
      for (var i = 0; i < admins.length; i++) {
        var a='{{route("cliente.index")}}';
        admins[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+var id=cliente[i].id+'">BORRAR</a>';
      }
      console.log(admins);
      $('#admin').dynatable({
        dataset:{records:admins},
      });
    });
  </script>
@endsection

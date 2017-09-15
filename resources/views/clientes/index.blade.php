@extends('layouts.app')
@section('titulo')
Clientes
@endsection
@section('css')
  {!! Html::style('dynatable/jquery.dynatable.css')!!}
@endsection
@section('contenido')
 

<div class="container-fluid">
  <div class="well" style="background-color: #fff;">


    <div class="panel-heading" >Tabla de CLientes</div>
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
        <h4 class="modal-title">Registro de Cliente</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{route('cliente.store')}}">
          {{csrf_field()}}
          <div class="form-group">
            <label for="nom_clie" class="col-lg-4 control-label">Nombre: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="nom_clie" name="nom_clie"
                     placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="pat_clie" class="col-lg-4 control-label">Paterno: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="pat_clie"  name="pat_clie"
                     placeholder="Paterno">
            </div>
          </div>
          <div class="form-group">
            <label for="mat_clie" class="col-lg-4 control-label">Materno: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="mat_clie"  name="mat_clie"
                     placeholder="Materno">
            </div>
          </div>
          <div class="form-group">
            <label for="ci_clie" class="col-lg-4 control-label">C.I.: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="ci_clie"  name="ci_clie"
                     placeholder="C.I.">
            </div>
          </div>
          <div class="form-group">
            <label for="tel_clie" class="col-lg-4 control-label">Telefono: </label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="tel_clie"  name="tel_clie"
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
<div id="modcliemodi" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Registro de Cliente</h4>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" role="form" method="POST" action="{{route('cliente.apdatecli')}}">
      {{csrf_field()}}
      <div class="form-group">
        <input type="hidden" class="form-control" id="id2" name="id" value="">
        <label for="nom_clie" class="col-lg-4 control-label">Nombre: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="nom" name="nom_clie">
        </div>
      </div>
      <div class="form-group">
        <label for="pat_clie" class="col-lg-4 control-label">Paterno: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="pat"  name="pat_clie">
        </div>
      </div>
      <div class="form-group">
        <label for="mat_clie" class="col-lg-4 control-label">Materno: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="mat"  name="mat_clie">
        </div>
      </div>
      <div class="form-group">
        <label for="ci_clie" class="col-lg-4 control-label">C.I.: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="ci"  name="ci_clie">
        </div>
      </div>
      <div class="form-group">
        <label for="tel_clie" class="col-lg-4 control-label">Telefono: </label>
        <div class="col-lg-8">
          <input type="text" class="form-control" id="tel"  name="tel_clie">
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
<form class="" action="{{route('cliente.eliminar')}}" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" id="id" value="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ELIMINAR PACIENTE</h4>
      </div>
      <div class="modal-body">
        <p>Esta seguro de eliminar al paciente?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">ELIMINAR</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div
<!--fin del Modal content-->

</form>
  </div>
  <table class="table" id="cliente">
    <thead>
      <tr>
        <td>ID</td><td data-dynatable-column="NOM_CLIE">NOMBRE</td>
        <td data-dynatable-column="PAT_CLIE">PATERNO</td>
        <td data-dynatable-column="MAT_CLIE">mat_clie</td>
        <td data-dynatable-column="CI_CLIE">ci_clie</td>
        <td data-dynatable-column="TEL_CLIE">tel_clie</td>
        <td data-dynatable-column="boton">ELIMINAR</td>
        <td data-dynatable-column="boton2">MODIFICAR</td>

      </tr>
    </thead>
    <tbody>
      <tr>

      </tr>
    </tbody>


  </table>


</div>


<br>

</div>
</div>
@endsection
@section('js')
  {!! Html::script('dynatable/jquery-1.7.2.min.js')!!}
  {!! Html::script('dynatable/jquery.dynatable.js')!!}
  <script type="text/javascript">
    $(document).on('ready', function(){
      var clientes={!! json_encode($clientes->toArray())!!};
      for (var i = 0; i < clientes.length; i++) {
        var a='{{route("cliente.index")}}';
        var id=clientes[i].id;
        var nom=clientes[i].NOM_CLIE;
        var pat=clientes[i].PAT_CLIE;
        var mat=clientes[i].MAT_CLIE;
        var ci=clientes[i].CI_CLIE;
        var tel=clientes[i].TEL_CLIE;

        var b="'"+id+"','"+nom+"','"+pat+"','"+mat+"','"+ci+"','"+tel+"'";

        clientes[i].boton='<a onclick="javascript:pasa('+id+');" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" >BORRAR</a>';
        clientes[i].boton2='<a onclick="javascript:pasadatos('+b+');" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#modcliemodi" style="background-color:#1464ed; color: #fff;" >MODIFICAR</a>';
      }
      console.log(clientes);
      $('#cliente').dynatable({
        dataset:{records:clientes},
      });
    });
  </script>
  <script type="text/javascript">
    function pasa(id){
      $('#id').val(id);
    }
    function pasadatos(id,nom,pat,mat,ci,tel){
      $('#id2').val(id);
      $('#nom').val(nom);
      $('#pat').val(pat);
      $('#mat').val(mat);
      $('#ci').val(ci);
      $('#tel').val(tel);
    }
  </script>
@endsection

@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
{{-- <h1>Dashboard</h1>s --}}
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo registro</button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal" data-bs-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Registro de Asociaciones</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nombre Asociación</label>
                              <input type="text" class="form-control" id="recipient-name">

                              <label for="recipient-name" class="col-form-label">Número de asociados</label>
                              <input type="number" class="form-control" id="recipient-name">

                              <label for="recipient-name" class="col-form-label">Fecha de contrato</label>
                              <input type="date" class="form-control" id="recipient-name">

                              <label for="recipient-name" class="col-form-label">Precio por litro</label>
                              <input type="number" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Observaciones</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                    </div>

                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Proveedores</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Buscar">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nombre de la asociación</th>
                                    <th>Nro. de asociados</th>
                                    <th>Fecha de contrato</th>
                                    <th>Precio acordado / litro</th>
                                    <th>Opciones</th>
                                    {{-- <th>CSS grade</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Asociados uno</td>
                                    <td>10</td>
                                    <td>18/09/2020</td>
                                    <td>Bs. 2.70</td>
                                    <th><a class="btn btn-info btn-sm" href="">Asociados</a></th>
                                </tr>
                                <tr>
                                    <td>Asociados dos</td>
                                    <td>19</td>
                                    <td>18/01/2020</td>
                                    <td>Bs. 2.70</td>
                                    <th><a class="btn btn-info btn-sm" href="">Asociados</a></th>
                                </tr>
                                <tr>
                                    <td>Asociados tres</td>
                                    <td>11</td>
                                    <td>18/08/2020</td>
                                    <td>Bs. 2.70</td>
                                    <th><a class="btn btn-info btn-sm" href="">Asociados</a></th>
                                </tr>
                                <tr>
                                    <td>Asociados cuatro</td>
                                    <td>15</td>
                                    <td>18/09/2020</td>
                                    <td>Bs. 2.70</td>
                                    <th><a class="btn btn-info btn-sm" href="">Asociados</a></th>
                                </tr>
                                <tr>
                                    <td>Asociados uno</td>
                                    <td>10</td>
                                    <td>18/09/2020</td>
                                    <td>Bs. 2.70</td>
                                    <th><a class="btn btn-info btn-sm" href="">Asociados</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@stop

@section('css')

@stop

@section('js')
<script>

</script>
@stop
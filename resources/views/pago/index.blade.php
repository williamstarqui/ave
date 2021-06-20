@extends('adminlte::page')
{{-- @section('plugins', 'Datatables', true)
    
@endsection --}}
@section('content')
<section class="content">
  <div class="container-fluid">
    <button type="button" class="btn btn-primary btn-sm">Nuevo registro</button>
    <br><br>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Lista de acopio</h3>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
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
                  <table class="table table-hover text-nowrap table table-sm">
                    <thead>
                      <tr>
                        <th>Asociación</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acopio dia 1</th>
                        <th>Acopio dia 2</th>
                        <th>Acopio dia 3</th>
                        <th>Acopio dia 4</th>
                        <th>Acopio dia 5</th>
                        <th>Acopio dia 6</th>
                        <th>Acopio dia 7</th>
                        <th>Acopio dia 8</th>
                        <th>Acopio dia 9</th>
                        <th>Acopio dia 10</th>
                        <th>Acopio dia 11</th>
                        <th>Acopio dia 12</th>
                        <th>Acopio dia 13</th>
                        <th>Acopio dia 14</th>
                        <th>Acopio dia 15</th>
                        <th>Total litros</th>
                        {{-- <th>Fecha acopio</th> --}}
                        <th>Precio</th>
                        {{-- <th colspan="2">Opciones</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Asociados 1</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>50 l.</td>
                        {{-- <td>11-7-2014</td> --}}
                        <td>50</td>
                        {{-- <td><button class="btn btn-primary">Detalles</button></td> --}}
                      </tr>

                      <tr>
                        <td>Asociados 1</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>50 l.</td>
                        {{-- <td>11-7-2014</td> --}}
                        <td>50</td>
                        {{-- <td><button class="btn btn-primary">Detalles</button></td> --}}
                      </tr>

                      <tr>
                        <td>Asociados 1</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>50 l.</td>
                        {{-- <td>11-7-2014</td> --}}
                        <td>50</td>
                        {{-- <td><button class="btn btn-primary">Detalles</button></td> --}}
                      </tr>

                      <tr>
                        <td>Asociados 1</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>50 l.</td>
                        {{-- <td>11-7-2014</td> --}}
                        <td>50</td>
                        {{-- <td><button class="btn btn-primary">Detalles</button></td> --}}
                      </tr>

                      <tr>
                        <td>Asociados 1</td>
                        <td>Juan</td>
                        <td>Perez</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>50 l.</td>
                        {{-- <td>11-7-2014</td> --}}
                        <td>50</td>
                        {{-- <td><button class="btn btn-primary">Detalles</button></td> --}}
                      </tr>



                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.card-header -->

          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@stop
@section('js')
{{-- <script>
    $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "autoHeight":true,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "No hay registros",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search" : "Buscar:",
                    "paginate" : {
                      "next": "Siguiente",
                      "previous" : "Anterior"
                    }
                }
            })
        });

</script> --}}
@stop
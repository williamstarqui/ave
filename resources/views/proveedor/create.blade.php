@extends('adminlte::page')
{{-- @section('plugins','Datatables', true)
    
@endsection --}}
@section('content')
<div id="formulario">
    <label for="Material">Material</label>
    <button type="button" class="clonar btn btn-secondary btn-sm">+</button>
    <div class="input-group">
      <select name="nombres[]" class="form-control col-md-6">
        <option value="1">
          Material 1
        </option>
        <option value="2">
          Material 2
        </option>
      </select>
      <input type="number" class="form-control col-md-6 @error('Cantidad') is-invalid @enderror" name="cantidades[]" placeholder="Cantidad a solicitar" required>
    </div>
  </div>
@stop

@section('js')
<script>
    $('.clonar').click(function() {
  // Clona el .input-group
  var $clone = $('#formulario .input-group').last().clone();

  // Borra los valores de los inputs clonados
  $clone.find(':input').each(function () {
    if ($(this).is('select')) {
      this.selectedIndex = 0;
    } else {
      this.value = '';
    }
  });

  // Agrega lo clonado al final del #formulario
  $clone.appendTo('#formulario');
});
</script>
@stop


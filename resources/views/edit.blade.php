@include('cabecalho')

@if(session('success'))
    <p class="alert-success">
        {{ session('success')}}
    </p>
@endif

<form action="{{ url('/edit_carro', $carro->id) }}" method="post">
{{ csrf_field() }}<input type="hidden" name="_method" value="PUT">

    <div class="form-group col-md-6">
      <label for="modelo">Modelo</label>
      <input type="text" name="modelo" class="form-control" value="{{ $carro->modelo }}">
    </div>


  <div class="form-group col-md-6">
      <label for="Marca">Marca</label>
      <input type="text" name="marca" class="form-control" value="{{ $carro->marca }}">
    </div>


    <div class="form-group col-md-2">
      <label for="preco">Preço</label>
      <input type="text" name="preco" class="form-control" value="{{ $carro->preco }}">
    </div>
  </div>
 
  <input type="submit" value="Salvar" class="btn btn-primary">
</form>


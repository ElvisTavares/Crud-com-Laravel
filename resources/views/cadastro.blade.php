@include('cabecalho')

@if(session('success'))
    <p class="alert-success">
        {{ session('success')}}
    </p>
@endif

<form action="{{ url('/cadastro_carro') }}" method="post">
  {{ csrf_field()}}
    <div class="form-group col-md-6">
      <label for="modelo">Modelo</label>
      <input type="text" name="modelo" class="form-control" placeholder="Modelo">
    </div>


  <div class="form-group col-md-6">
      <label for="Marca">Marca</label>
      <input type="text" name="marca" class="form-control" placeholder="Marca">
    </div>


    <div class="form-group col-md-2">
      <label for="preco">Preço</label>
      <input type="text" name="preco" class="form-control">
    </div>
  </div>
 
  <input type="submit" value="Cadastrar" class="btn btn-primary">
</form>


<html>
<head>
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container _content">

    @if(session('success'))
        <p class="alert-success">
            {{ session('success')}}
        </p>
    @endif

    <h2>Sistema de cadastro de carros</h2>
    <div> <a href="{{ url('/cadastro_carro') }}" class="btn btn-primary">Cadastrar Carro</a></div>
    <br>
    <table class="table">
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Preço</th>
        </tr>
        </thead>

        <tbody>
        @foreach($carros as $carro)
        <tr>
            <td>{{ $carro->modelo }}</td>
            <td>{{ $carro->marca }}</td>
            <td>{{ $carro->preco }}</td>

            <td>
                <form action="{{ url('/delete_carro', $carro->id) }} " method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Deletar" class="btn btn-danger">

                    <a href="{{ url('/edit_carro', $carro->id) }}" class="btn btn-success">Editar</a>
               </form>
            </td>
            </tr>
            @endforeach
        </tbody>  
    </table>

    </div>
</body>
</html>
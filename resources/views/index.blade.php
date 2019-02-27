<html>
<head>
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container _content">
    <h2>Sistema de cadastro de carros</h2>
    <div> <a href="{{ url('/cadastro_carro') }}" class="btn btn-primary">Cadastrar Carro</a></div>
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
                <input type="button" value="Deletar" class="btn btn-danger">
                <input type="button" value="Editar" class="btn btn-success">
            </td>
            </tr>
            @endforeach
        </tbody>  
    </table>

    </div>
</body>
</html>
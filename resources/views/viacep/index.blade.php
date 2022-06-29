<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViaCep</title>
</head>
<body>
    <div>
        <form action="{{ route('viacep.index.post') }}" method="post">
            @csrf
            <label for="cep">Digite o CEP</label>
            <input type="number" id="cep" name="cep">
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>

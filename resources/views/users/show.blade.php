<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Usuario {{$user->name}}</title>
</head>
<body>
    <div class="container">
        <h1>Usuario {{$user->name}}</h1>
        <hr>
        <table class="table table-primary table-responsive table-hover text-center">
            <thead >
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de criação</th>
                <th>Ações</th>
            </thead>
            <tbody class="table-light">
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ date('d/m/Y - h:m'), strtotime($user->created_at)}}</td>
                    <td><a name="" id="" class="btn btn-warning ms-2" href="{{route('users.show', $user->id)}}"      role="button">Editar</a><a name="" id="" class="btn btn-danger text-dark ms-2" href="{{route('users.show', $user->id)}}" role="button">Deletar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

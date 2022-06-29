<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Users list</title>
</head>
<body>
    <div class="container">
        <h1>Tabela de usuários</h1>
        <table class="table table-primary table-responsive table-hover text-center">
            <thead >
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de criação</th>
                <th>Ações</th>
            </thead>
            <tbody class="table-light">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ date('d/m/Y - h:m'), strtotime($user->created_at)}}</td>
                    <td><a name="" id="" class="btn btn-primary" href="{{route('users.show', $user->id)}}" role="button">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

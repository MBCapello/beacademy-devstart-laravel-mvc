@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')
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
                <td><a name="" id="" class="btn btn-warning ms-2" href="{{route('users.edit', $user->id)}}"
                    role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger text-dark ms-2" href="{{route('users.show', $user->id)}}" role="button">Deletar</a></td>
            </tr>
        </tbody>
    </table>
@endsection

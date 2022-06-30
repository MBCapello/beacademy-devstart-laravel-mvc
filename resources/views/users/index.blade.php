@extends('template.users');

@section('title', 'Listar usuários')

@section('body')
        <h1>Tabela de usuários</h1>
        <hr>
        <a href="{{ route('users.create') }}" class="btn btn-outline-success float-end mb-3">Criar novo usuário</a>
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
@endsection

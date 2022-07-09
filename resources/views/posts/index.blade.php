@extends('template.users');

@section('title', 'Listar postagens')

@section('body')
        <h1>Postagens</h1>
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
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post}}</td>
                    <td>{{ date('d/m/Y - h:m'), strtotime($post->created_at)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection

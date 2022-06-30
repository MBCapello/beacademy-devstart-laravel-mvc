@extends('template.users');

@section('title', 'Email já cadastrado')

@section('body')
        <h1>Desculpe</h1>
        <hr>
        <p>
            O email fornecida já possui um cadastro em nosso banco de dados
        </p>
        <div>
            <a href="{{ route('users.index')}}" class="btn btn-outlined btn-primary">Voltar a lista</a>
            <a href="{{ route('users.create')}}" class="btn btn-outlined btn-secondary">Criar outro usuário</a>
        </div>
@endsection

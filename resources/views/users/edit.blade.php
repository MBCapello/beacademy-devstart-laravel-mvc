@extends('template.users');

@section('title', "Editar usuário {$user->name}")

@section('body')
        <h1>Edite os dados do usuários</h1>
        <hr>
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3 shadow">
                <input value="{{$user->name}}" type="text" class="form-control fs-3 " id="floatingInput" placeholder="João da Silva" name="name" required>
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3 shadow">
                <input value="{{$user->email}}"type="email" class="form-control fs-3" id="floatingInput" placeholder="name@example.com" name="email" required>
                <label for="floatingInput">endereço de Email</label>
            </div>
            <div class="form-floating mb-3 shadow">
                <input type="password" class="form-control fs-3" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary btn-large shadow" type="submit">Salvar dados do usuário</button>
        </form>
@endsection

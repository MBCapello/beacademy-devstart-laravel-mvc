@extends('template.users');

@section('title', 'Criar novo usuário')

@section('body')
        <h1>Insira os dados do novo usuários</h1>
        <hr>
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="form-floating mb-3 shadow">
                <input type="text" class="form-control fs-3 " id="floatingInput" placeholder="João da Silva" name="name" required>
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3 shadow">
                <input type="email" class="form-control fs-3" id="floatingInput" placeholder="name@example.com" name="email" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3 shadow">
                <input type="password" class="form-control fs-3" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary btn-large shadow" type="submit">Criar novo usuário</button>
        </form>
@endsection

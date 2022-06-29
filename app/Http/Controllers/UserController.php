<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome'=>'Marcelo Capello',
            'nickname'=>'Mackgaren',
        ];

        dd($users);
    }

    public function show($id)
    {
        dd("O id do usuário é {$id}");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();

       return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', compact('user'));
    }

    public function create()
    {
            return view('users.create');
    }

    public function store(Request $request)
    {
       $data = $request->all();
       $data['password'] = bcrypt($request->password);

       if(User::where('email','=', $request->email)->exists() ) {
            return redirect()->route('users.create_error');
            exit;
        }
        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function create_error()
    {
        return view('users.create_error');
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email');

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        return redirect()->route('users.index');
    }
}

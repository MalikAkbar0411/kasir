<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin.user.index', compact('user'));
    }

    public function tambah()
    {
        return view('admin.user.form');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'role' => 'required',
            'password' => 'required' 
        ]);

        $data = $request->only('email', 'name', 'role', 'password');
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('user');

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.form', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'role' => 'required',
            'password' => 'required' 
        ]);

        $input = $request->all();
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'user tidak ditemukan');
        }

        $user->update($input);
        return redirect()->route('user')->with('success', 'user berhasil diperbarui');
    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->route('user');
    }
}



<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'         => 'User List',
            'users'         => User::all(), 
            'content'       => 'users/index',
        ];

        return view("layouts.wrapper", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'         => 'Create User',
            'users'         => User::all(), 
            'content'       => 'users/create',
        ];

        return view("layouts.wrapper", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name'     => 'required',
            'user_name'     => 'required',
            'nip'           => 'required',
            'email'         => 'required',
            'role'          => 'required'
        ]);

        $data['password'] = bcrypt($request->password);

        User::create($data);
        FacadesAlert::success('Berhasil', 'Data user berhasil ditambahkan');
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title'         => 'Edit User',
            'users'         => User::find($id), 
            'content'       => 'users/edit',
        ];

        return view("layouts.wrapper", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $data = $request->validate([
            'full_name'     => 'nullable',
            'user_name'     => 'nullable',
            'nip'           => 'nullable',
            'email'         => 'nullable',
            'role'          => 'nullable'
        ]);

        $item->update($data);
        FacadesAlert::success('Berhasil', 'Data user berhasil diubah');
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $users = User::find($id);
            $users->delete();
            FacadesAlert::success('Berhasil', 'Data user berhasil dihapus');
            return redirect()->back();
        } catch (\Throwable $th) {
            FacadesAlert::error('Gagal', 'Gagal menghapus data user');
            return redirect()->back()->with('errorr', 'Gagal menghapus data user');
        }
    }
}

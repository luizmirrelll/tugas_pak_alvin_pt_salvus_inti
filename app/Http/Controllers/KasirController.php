<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = User::whereHas('roles', function($q){
            $q->where('name', 'kasir');
        })->get();

        return view('kasir.index', compact('kasir'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $kasirRole = Role::where('name', 'kasir')->first();
        $user->roles()->attach($kasirRole);

        return redirect()->route('kasir.index');
    }

    public function edit(User $kasir)
    {
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, User $kasir)
    {
        $kasir->update($request->all());

        return redirect()->route('kasir.index');
    }

    public function destroy(User $kasir)
    {
        $kasir->delete();

        return redirect()->route('kasir.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function manageKasir()
    {
        $kasir = User::whereHas('roles', function($q){
            $q->where('name', 'kasir');
        })->get();

        return view('admin.manage_kasir', compact('kasir'));
    }

    public function createKasir()
    {
        return view('admin.create_kasir');
    }

    public function storeKasir(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $kasir = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $kasirRole = Role::where('name', 'kasir')->first();
        $kasir->roles()->attach($kasirRole);

        return redirect()->route('admin.manage_kasir')->with('success', 'Kasir created successfully.');
    }

    public function editKasir(User $kasir)
    {
        return view('admin.edit_kasir', compact('kasir'));
    }

    public function updateKasir(Request $request, User $kasir)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $kasir->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $kasir->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $kasir->password,
        ]);

        return redirect()->route('admin.manage_kasir')->with('success', 'Kasir updated successfully.');
    }

    public function destroyKasir(User $kasir)
    {
        $kasir->delete();

        return redirect()->route('admin.manage_kasir')->with('success', 'Kasir deleted successfully.');
    }
}
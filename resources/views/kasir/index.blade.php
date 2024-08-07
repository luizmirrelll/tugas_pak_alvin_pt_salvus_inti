@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">List of Kasir</h1>
    {{-- <a href="{{ route('admin.create_kasir') }}" class="btn btn-primary mb-3">Add Kasir</a> --}}

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($kasir as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>
                        <a href="{{ route('admin.edit_kasir', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.destroy_kasir', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

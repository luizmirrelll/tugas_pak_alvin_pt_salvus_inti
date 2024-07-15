@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Kasir</h1>
    <form action="{{ route('kasir.update', $kasir) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $kasir->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $kasir->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Kasir</button>
    </form>
</div>
@endsection

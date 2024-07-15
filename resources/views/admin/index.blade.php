@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Admin Dashboard</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Kasir</h5>
                    <p class="card-text">Add, edit, and delete kasir accounts.</p>
                    <a href="{{ route('admin.manage_kasir') }}" class="btn btn-primary">Manage Kasir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

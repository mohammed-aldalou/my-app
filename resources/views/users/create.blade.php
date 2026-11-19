@extends('layouts.app')

@section('title', 'Add User')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Add User</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                       class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
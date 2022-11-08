@extends('layouts/main')
@section('title','Login')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>My-Library | Login</h1><br>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="{{ Session::get('username') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="{{ Session::get('password') }}" required>
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3 text-center">
                don't have an account yet? <a href="/register">Sign Up</a>
            </div>
        </form>
    </div>
@endsection
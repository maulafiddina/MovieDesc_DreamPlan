<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')
<!-- If you have a layout file, extend it -->

@section('content')
<div class="container">
    <h2>Login</h2>
    <form action="{{ url('/login') }}" method="post">
        @csrf
        <!-- Add the CSRF token field for security -->

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
@endsection
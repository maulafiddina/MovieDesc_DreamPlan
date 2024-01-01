<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <!-- Include your Vite script here -->
</head>

<body class="bg-gray-100">
    @include('header')

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded shadow-md w-96 mt-4 mb-20">
            @if(session()->has('success'))
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>

            <!-- Email and Password Form -->
            <form method="post" action="/login" class="mx-auto">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" required
                        autofocus value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md"
                        required>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="block w-full bg-gray-500 text-white p-2 rounded-md hover:bg-gray-600">Login</button>

                <!-- Register Link -->
                <div class="mt-4 text-center">
                    <p class="text-gray-600">Don't have an account? <a href="/register"
                            class="text-blue-500">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
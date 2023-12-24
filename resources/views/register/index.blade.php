<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('header')
    <div class="flex items-center justify-center h-screen bg-gray-200">

        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>

            <!-- Registration Form -->
            <form method="post" action="/register">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name"
                        class="block text-sm font-medium text-gray-600 @error('name') is-invalid @enderror">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md" required
                        autofocus value="{{ old('name') }}">
                </div>

                <!-- Username -->
                <div class=" mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" name="username" id="username" class="mt-1 p-2 w-full border rounded-md" required
                        value="{{ old('username') }}">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" required
                        value="{{ old('email') }}">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password"
                        class="block text-sm font-medium text-gray-600  @error('password') is-invalid @enderror">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md"
                        required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- Register Button -->
                <button type="submit"
                    class="w-full bg-gray-500 text-white p-2 rounded-md hover:bg-gray-600">Register</button>
            </form>

            <!-- Login Link -->
            <div class="mt-4">
                <p class="text-gray-600">Already have an account? <a href="/login" class="text-blue-500">Login</a></p>
            </div>
        </div>
    </div>
</body>

</html>
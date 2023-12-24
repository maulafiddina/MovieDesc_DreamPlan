<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MOVIEPLAN')</title>

    <!-- Add your stylesheets and scripts here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add more stylesheets or scripts as needed -->

    @yield('styles')
    <!-- Additional styles specific to each view -->
</head>

<body>
    <div id="app">
        <!-- Your navigation bar or header -->
        @include('partials.header')

        <!-- Main content section -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Add your scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Add more scripts as needed -->

    @yield('scripts')
    <!-- Additional scripts specific to each view -->
</body>

</html>
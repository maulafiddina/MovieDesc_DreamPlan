<!DOCTYPE html>
<html>

<head>
    <title>CINEMATION | Better Movie Better Life</title>
    @vite('resources/css/app.css')
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'your-preferred-font', sans-serif;
            /* Change to your preferred font */
        }

        .containerBadge {
            margin-top: 60px;
            /* Adjust based on your navbar height */
            margin-left: 100px;
            /* Adjust based on your sidebar width */
            padding: 20px;
            overflow: hidden;
        }

        /* Add other styles for your badges or other elements as needed */
    </style>
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col">
        <!-- Home Section -->

        <div class="containerBadge">
            @include('containerBadge')
        </div>
        @yield('main')
        @include('navDashboard')

        @include('sidebar')

    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>

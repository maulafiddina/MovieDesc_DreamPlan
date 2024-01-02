<!DOCTYPE html>
<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>MOVIEPLAN | Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>

@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')

@yield('container')



    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>

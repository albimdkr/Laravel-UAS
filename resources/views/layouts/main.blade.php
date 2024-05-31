<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title> ACTNET | {{ $title }} </title>

    {{-- CSS and JS --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Theme -->
    <script src="resources/js/theme.js"></script>
</head>
<body class="bg-white dark:bg-gray-900">
  
  {{-- HEADER --}}
  @include('partials/navbar')

  {{-- SECTION --}}
  @yield('container')

  {{-- FOOTER --}}
  @include('partials/footer')

  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
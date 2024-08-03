<html>
<head>
    <title> {{ __('Welcome') }} </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('files/images/default/logo.png') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
          rel="stylesheet">

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/c9eb5cb32a.js" crossorigin="anonymous"></script>
    <!-- Include style.scss -->
    @vite(['resources/css/public-part/style.scss', 'resources/js/app.js'])
    @yield('other_js')
</head>

<body>
<!-- Include header -->
@include('public-part.layout.includes.header')

@yield('content')

<!-- Include footer -->
@include('public-part.layout.includes.footer')
</body>
</html>

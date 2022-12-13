<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/style/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,700;1,400&family=Silkscreen&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('frontend.include.navbar')


    @yield('content')

    @include('frontend.include.footer')
    
    <script src="{{asset('pendaftran_ukm/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('pendaftran_ukm/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
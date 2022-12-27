<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Document</title>
</head>

<body>
    @include('layouts.sidebar')
    <div class="main-content">
        @include('layouts.navbar')
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>

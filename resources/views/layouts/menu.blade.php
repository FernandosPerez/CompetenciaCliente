<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/hol.css')}}">

    @yield('titulo')
    @yield('css')
</head>
<body >

<nav class="py-2 bg-light border-bottom">


    <div class="container d-flex flex-wrap">


        <ul class="nav me-auto">



        </ul>


        <ul class="nav">


            <li class="nav-item"><a href="/ingresar"
                                    class="nav-link link-dark px-2">Login</a></li>


            <li class="nav-item"><a href="/usuarios/agregar"
                                    class="nav-link link-dark px-2">Sign up</a></li>


        </ul>


    </div>


</nav>

@yield('contenido')
@yield('JS')

</body>
</html>

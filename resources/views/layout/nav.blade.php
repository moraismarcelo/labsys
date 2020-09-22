<head>
    <title>LabSys 0.1 - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
@section('sidebar')
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">

            <a href="{{route('exam.index')}}"><button class="btn btn-outline-info m-1" type="button">Exames</button></a>
            <a href="{{route('client.index')}}"><button class="btn btn-outline-info m-1" type="button">Clientes</button></a>

        </form>
    </nav>
@show
</div>
<div class="container">
    @yield('content')

</div>
</body>

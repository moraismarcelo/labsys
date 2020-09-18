<h1>Detalhes do exame</h1>

@if(!empty($exam))

    @foreach($exam as $ex)

    <h2>Nome</h2>
    <p>{{$ex->name}}</p>

    <h2>Valor</h2>
    <p>{{$ex->price}}</p>
    @endforeach
@endif

<a href="{{url('/exames')}}">Voltar</a>


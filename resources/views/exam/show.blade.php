@extends('layout.nav')
@section('content')
@if(!empty($exam))
    @foreach($exam as $ex)

    <h1>Detalhes de {{$ex->name}}</h1>
    <p><a href="{{"/exames/".$ex->id ."/edit"}}">Editar</a><a href={{route('exam.destroy',$ex->id)}}> Excluir</a></p>
    <h2>Nome</h2>
    <p>{{$ex->name}}</p>
    <h2>Valor</h2>
    <p>{{$ex->price}}</p>

    @endforeach
@endif

<a href="{{url('/exames')}}">Voltar</a>
@endsection

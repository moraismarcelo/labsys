@extends('layout.nav')
@section('content')
<h1> Cadastro de Exames</h1>
<p><a href="{{url('/exames')}}">Voltar </a><a href={{route('exam.destroy',$exam[0]->id)}}>Excluir</a></p>
<form action="{{url('/exames/' . $exam[0]->id)}}" method="post">
    @csrf
    @method('PUT')

    <label for="name">Título do Exame</label>
    <input type="text" name="name" id="name" value="{{$exam[0]->name}}">
    <label for="price">Preço do Exame</label>
    <input type="text" name="price" id="price" value="{{$exam[0]->price}}">
    <button type="submit">Atualizar Exame</button>
</form>
@endsection

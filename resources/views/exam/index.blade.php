@extends('layout.nav')


@section('content')
    <h1> Listagem de Exames</h1>
    <p><a href="{{url('/exames/create')}}">Cadastrar Exame</a></p>

<table class="table table-hover">
    <thead class="bg-primary">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <tbody>

        @if(!empty($exams))
            @foreach($exams as $exam)
                <tr>
                <td>{{$exam->id}}</td>
                <td>{{$exam->name}}</td>
                <td>{{$exam->price}}</td>
                <td><a href="{{route('exam.show', $exam->id)}}">Visualizar</a> |
                    <a href="{{"/exames/".$exam->id ."/edit"}}">Editar</a> |
                    <a href={{route('exam.destroy',$exam->id)}}>Excluir</a></td>

                </tr>
            @endforeach
        @endif

    </tbody>
</table>
@endsection

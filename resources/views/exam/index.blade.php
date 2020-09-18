<h1> Listagem de Exame</h1>

<p><a href="{{url('/exames/create')}}">Cadastrar Exame</a></p>

<table class="table">
    <thead>
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
                <td><a href="{{url('exames/'. $exam->id)}}">Visualizar</a> |
                    <a href="#">Editar</a> |
                    <a href="{{url('exames/destroy/'. $exam->id)}}">Excluir</a> </td>

                </tr>
            @endforeach
        @endif

    </tbody>
</table>
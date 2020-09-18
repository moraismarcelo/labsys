<h1> Cadastro de Exames</h1>
<form action="/exames/store" method="post">
    @csrf
    <label for="name">Título do Exame</label>
        <input type="text" name="name" id="name">
    <label for="price">Preço do Exame</label>
        <input type="text" name="price" id="price">
    <button type="submit">Cadastrar Exame</button>
</form>

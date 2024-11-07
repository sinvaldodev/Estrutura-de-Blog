<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário para criar post</title>
</head>
<body>
    <h1>Cadastrar Post</h1>
    <form action="{{ route('posts.store') }}" method="post">

    <!-- @csrf é utilizado para criar um token de validação do formulário -->
    @csrf
    <input type="text" name="titulo" id="titulo" placeholder="Digite um título">
    <textarea name="conteudo" id="conteudo" cols="30" rows="5" placeholder="Digite o
    conteudo"> </textarea>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>

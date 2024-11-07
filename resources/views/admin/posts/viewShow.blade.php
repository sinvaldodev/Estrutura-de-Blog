<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route( 'posts.create') }}"> Criar Post</a>
    <h1>Conteúdo do Post{{ $post->titulo }}</h1>
    <ul>
        <li><strong>Título: </strong>{{ $post->titulo }}</li>
        <li><strong>Conteúdo: </strong>{{ $post->conteudo }}</li>
    </ul>

    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        <!-- @csrf é utilizado para criar um token de validação do formulário -->
        @csrf
        <input type="hidden" name="_nethod" value="DELETE">
        <button type="submit">Excluir o Post: {{ $post->titulo }}</button>
    </form>
</body>
</html>

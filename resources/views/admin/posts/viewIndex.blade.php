<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 06</title>
</head>
<body>
    <a href="{{ route( 'posts.create') }}"> Criar Post</a>

    <h1>Listagem de Posts</h1>
    <!--
    $posts = a variável recebida do método index do PostController
    $post = a variável definida para percorrer todos os posts a serem listados
    -->
    @foreach($posts as $post)
    <p>
        {{$post->titulo}}
        [ <a href="{{ route('posts.show', $post->id)}}">Conteúdo</a> ]
        [ <a href="{{ route('posts.edit', $post->id)}}">Editar</a> ]
    </p>
    @endforeach
</body>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();

        return view('admin.posts.viewIndex', compact('posts'));
    }

    public function create(){
    return view('admin.posts.viewCreate');
    }
    // $request é um objeto do tipo Request
    public function store( Request $request ){
    // criando uma requisição com todos os campos
    Post::create($request->all());
    //depois que inserir o registro será direcionado para a página de listagem de produtos
    return redirect()->route('posts.index');
    }

    public function show($id){
        $post = Post::find($id);
        if (!$post){
            return redirect()->route('posts.index');
        }

        return view('admin.posts.viewShow', compact('post'));
    }

    public function destroy($id)
    {
    // irá retornar o post que tem o id passado
    $post = Post::find($id);
    //verifica se foi localizado um post para o id passado
    if (!$post) {
    //caso não seja localizado o id, volta para a página inicial
    return redirect()->route('posts.index');
    }
    //caso tenha encontrado um post para o id faz a exclusão
    $post->delete();
    // redireciona para a página default e passa uma mensagem de exclusão com sucesso
    return redirect()
        ->route('posts.index')
        ->with('message', 'Post excluído com sucesso');
    }

    public function edit($id){
            //verifica se foi localizado um post para o id informado
            if(!$post = Post::find($id)){
            //caso não seja localizado um post para o id, retorna para a rota que chamou o método
            return redirect()->back();
            }
            // se encontrar um id para o post para o post, será chamada a view para apresentar o conteúdo do post
            return view('admin.posts.viewEdit', compact('post'));
        }

        public function update(Request $request, $id)
        {
            //verifica se foi localizado um post para o id informado
            if (!$post = Post::find($id)) {
            //caso não seja localizado um post para o id, retorna para a rota que chamou o método
            return redirect()->back();
            }
            $post->update($request->all());
            // se encontrar um id para o post para o post, redireciona para a rota da página inicial
            return redirect()->route('posts.index');
        }
}

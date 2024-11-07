<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // definindo apenas quais propriedades poderão ser enviada pelo formulário
    protected $fillable = ['titulo', 'conteudo'];
}

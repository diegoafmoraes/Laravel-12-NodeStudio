<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Informa ao Eloquent a tabela correta no banco, caso seja: 'produto'
    // protected $table = 'produto';

    /** @use HasFactory<\Database\Factories\ProdutoFactory> */
    use HasFactory;

    // Nome da tabela
    protected $table = 'produtos';

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

}
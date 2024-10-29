<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';

    protected $fillable = ['user_id', 'total'];

    // Relacionamento com Itens do Carrinho
    public function itens()
    {
        return $this->hasMany(ItemPedido::class, 'carrinho_id');
    }
}



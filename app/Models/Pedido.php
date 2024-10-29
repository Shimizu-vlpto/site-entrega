<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = ['user_id', 'status', 'total'];

    // Relacionamento com Itens do Pedido
    public function itens()
    {
        return $this->hasMany(ItemPedido::class, 'pedido_id');
    }
}

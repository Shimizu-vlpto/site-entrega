<?php
namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        return Carrinho::all();
    }

    public function store(Request $request)
    {
        $item = Carrinho::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = Carrinho::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        Carrinho::destroy($id);
        return response()->json(null, 204);
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Imagem;
use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function index()
    {
        return Imagem::all();
    }

    public function store(Request $request)
    {
        $imagem = Imagem::create($request->all());
        return response()->json($imagem, 201);
    }

    public function show($id)
    {
        return Imagem::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $imagem = Imagem::findOrFail($id);
        $imagem->update($request->all());
        return response()->json($imagem, 200);
    }

    public function destroy($id)
    {
        Imagem::destroy($id);
        return response()->json(null, 204);
    }
}

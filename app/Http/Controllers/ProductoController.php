<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'marca' => 'required'
        ]);
        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.update', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $producto = Producto::findOrFail($id);
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'marca' => 'required'
        ]);
        $producto->update($request->only(['nombre', 'descripcion', 'precio', 'stock', 'marca']));
        return redirect()->route('productos.index')->with('success', 'Editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        // Producto::destroy($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'producto eliminado');


    }
}

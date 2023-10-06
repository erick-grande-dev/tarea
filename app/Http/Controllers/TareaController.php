<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = [
            ['id' => 1, 'nombre' => 'Manzana', 'precio' => 1.99],
            ['id' => 2, 'nombre' => 'Banana', 'precio' => 0.99],
            ['id' => 3, 'nombre' => 'Naranja', 'precio' => 1.49],
            ['id' => 4, 'nombre' => 'Fresa', 'precio' => 2.29],
            ['id' => 5, 'nombre' => 'Pera', 'precio' => 1.79],
            ['id' => 6, 'nombre' => 'Uva', 'precio' => 2.99],
            ['id' => 7, 'nombre' => 'Mango', 'precio' => 1.89],
            ['id' => 8, 'nombre' => 'Kiwi', 'precio' => 1.69],
            ['id' => 9, 'nombre' => 'Piña', 'precio' => 2.49],
            ['id' => 10, 'nombre' => 'Cereza', 'precio' => 3.49],
        ];

        return response()->json($frutas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json("hola " . $request->nombre);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $frutas = [
            ['id' => 1, 'nombre' => 'Manzana', 'precio' => 1.99],
            ['id' => 2, 'nombre' => 'Banana', 'precio' => 0.99],
            ['id' => 3, 'nombre' => 'Naranja', 'precio' => 1.49],
            ['id' => 4, 'nombre' => 'Fresa', 'precio' => 2.29],
            ['id' => 5, 'nombre' => 'Pera', 'precio' => 1.79],
            ['id' => 6, 'nombre' => 'Uva', 'precio' => 2.99],
            ['id' => 7, 'nombre' => 'Mango', 'precio' => 1.89],
            ['id' => 8, 'nombre' => 'Kiwi', 'precio' => 1.69],
            ['id' => 9, 'nombre' => 'Piña', 'precio' => 2.49],
            ['id' => 10, 'nombre' => 'Cereza', 'precio' => 3.49],
        ];

        foreach ($frutas as  $fruta){
            if($fruta['id'] == $id){
                return $fruta;
            }else {
                continue;
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

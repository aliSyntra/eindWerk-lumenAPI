<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    
    public function showAllAnimals()
    {
        return response()->json(Animal::all());
    }

    public function showOneAnimal($id)
    {
        return response()->json(Animal::find($id));
    }

    public function create(Request $request)
    {
        $animal = Animal::create($request->all());

        return response()->json($animal, 201);
    }

    public function update($id, Request $request)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return response()->json($animal, 200);
    }

    public function delete($id)
    {
        Animal::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
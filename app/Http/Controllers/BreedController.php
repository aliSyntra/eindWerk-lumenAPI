<?php

namespace App\Http\Controllers;

use App\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    
    public function showAllBreeds()
    {
        return response()->json(Breed::all());
    }

    public function showOneBreedS($id)
    {
        return response()->json(Breed::find($id));
    }

    public function create(Request $request)
    {
        $breed = Breed::create($request->all());

        return response()->json($breed, 201);
    }

    public function update($id, Request $request)
    {
        $breed = Breed::findOrFail($id);
        $breed->update($request->all());

        return response()->json($breed, 200);
    }

    public function delete($id)
    {
        Breed::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
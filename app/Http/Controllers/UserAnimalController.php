<?php

namespace App\Http\Controllers;

use App\UserAnimal;
use Illuminate\Http\Request;

class UserAnimalController extends Controller
{
    
    public function showAllUserAnimals()
    {
        return response()->json(UserAnimal::all());
    }

    public function showOneUserAnimal($id)
    {
        return response()->json(UserAnimal::find($id));
    }

    public function create(Request $request)
    {
        $userAnimal = UserAnimal::create($request->all());

        return response()->json($userAnimal, 201);
    }

    public function update($id, Request $request)
    {
        $userAnimal = UserAnimal::findOrFail($id);
        $userAnimal->update($request->all());

        return response()->json($userAnimal, 200);
    }

    public function delete($id)
    {
        UserAnimal::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
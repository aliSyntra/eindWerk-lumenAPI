<?php

namespace App\Http\Controllers;

use App\UserAnimal;
use Illuminate\Http\Request;
use DB;

class UserAnimalController extends Controller
{
    //animals of single user + corresponding medication
    public function userFetch($id) {
        $results = DB::select("
        SELECT ua.id, ua.animal_id, ua.name, ua.gender, ua.birthday, 
        m.id AS medid, m.name AS medname, m.startDate, m.endDate, m.amount, m.description
        FROM useranimals AS ua LEFT OUTER JOIN medications AS m 
        ON ua.id = m.userAnimal_id WHERE ua.user_id = '{$id}'
        ");
        return json_encode($results);
    }

    //basic functions
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
<?php

namespace App\Http\Controllers;

use App\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    
    public function showAllMedications()
    {
        return response()->json(Medication::all());
    }

    public function showOneMedication($id)
    {
        return response()->json(Medication::find($id));
    }

    public function create(Request $request)
    {
        $medication = Medication::create($request->all());

        return response()->json($medication, 201);
    }

    public function update($id, Request $request)
    {
        $medication = Medication::findOrFail($id);
        $medication->update($request->all());

        return response()->json($medication, 200);
    }

    public function delete($id)
    {
        Medication::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
    {
        return response()->json(Drink::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
        ]);

        $drink = Drink::create($request->all());
        return response()->json($drink, 201);
    }

    public function show($id)
    {
        $drink = Drink::find($id);
        if (!$drink) {
            return response()->json(['message' => 'Drink not found'], 404);
        }
        return response()->json($drink, 200);
    }

    public function update(Request $request, $id)
    {
        $drink = Drink::find($id);
        if (!$drink) {
            return response()->json(['message' => 'Drink not found'], 404);
        }
        $drink->update($request->all());
        return response()->json($drink, 200);
    }

    public function destroy($id)
    {
        $drink = Drink::find($id);
        if (!$drink) {
            return response()->json(['message' => 'Drink not found'], 404);
        }
        $drink->delete();
        return response()->json(['message' => 'Drink deleted'], 200);
    }
}

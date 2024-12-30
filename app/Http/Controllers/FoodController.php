<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return response()->json(Food::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
        ]);

        $food = Food::create($request->all());
        return response()->json($food, 201);
    }

    public function show($id)
    {
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['message' => 'Food not found'], 404);
        }
        return response()->json($food, 200);
    }

    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['message' => 'Food not found'], 404);
        }
        $food->update($request->all());
        return response()->json($food, 200);
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['message' => 'Food not found'], 404);
        }
        $food->delete();
        return response()->json(['message' => 'Food deleted'], 200);
    }
}

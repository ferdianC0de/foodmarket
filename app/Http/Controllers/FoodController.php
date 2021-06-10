<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Food;
use Auth;

class FoodController extends Controller
{
    public function allFoods()
    {
        $foods = Food::all();
        return view('food/index', ['foods' => $foods]);
    }

    public function createFood(Request $request)
    {
        $request->request->add(['owner' => Auth::id()]);
        $validated = $request->validate([
            'food_name' => 'required|max:100',
            'desc' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'owner' => 'required'
        ]);
        Food::insert($validated);
        return redirect()->route('owner-food')->with(['message' => ['type' => 'success', 'content' => 'Food has been created!']]);
    }

    public function deleteFood($food)
    {
        if (Auth::check()) {
            Food::find($food)->delete();
            return redirect()->route('owner-food')->with(['message' => ['type' => 'danger', 'content' => 'Food has been deleted!']]);
        }else{
            return redirect()->route('owner-food')->with(['message' => ['type' => 'danger', 'content' => 'Cannot delete these food!']]);
        }
    }


    //Owner
    public function foodsByOwner($owner = 1)
    {
        // $foods = Food::where('owner',$owner);
        $foods = Food::all();
        return view('food/index', ['foods' => $foods]);
    }

    public function inputFood()
    {
        return view('food/input');
    }
}

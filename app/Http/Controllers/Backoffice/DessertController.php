<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Dessert;
use Illuminate\Http\Request;

class DessertController extends Controller
{
    //the list of all
    public function index()
    {
        $desserts =  Dessert::all();
        return view('backoffice.desserts.index', compact('desserts'));
    }

    public function create()
    {
        $desserts = Dessert::all();
        return view('backoffice.desserts.create', compact('desserts'));
    }

    public function store()
    {
        //dd(request()->all());

        $vegetarian = request()->has('vegetarian') ? 1 : 0; //resolves unckecked box
        $dessert = new Dessert;
        $dessert->id = request()->input('id');
        $dessert->name = request()->input('name');
        $dessert->type = request()->input('type');
        $dessert->price = request()->input('price');
        $dessert->calories = request()->input('calories');
        $dessert->fat = request()->input('fat');
        $dessert->carbohydrates = request()->input('carbohydrates');
        $dessert->protein = request()->input('protein');
        $dessert->vegetarian = $vegetarian;
        $dessert->description = request()->input('description');
        $dessert->image = request()->input('image');


        $dessert->save();


        return redirect('/backoffice/desserts');
    }


    public function edit($id)
    {
        $dessert = Dessert::find($id);
        $desserts = Dessert::all();
        return view('backoffice.desserts.edit', compact('dessert', 'desserts'));
    }

    public function update($id)
    {
        $vegetarian = request()->has('vegetarian') ? 1 : 0;
        $dessert = Dessert::find($id);

        $dessert->id = request()->input('id');
        $dessert->type = request()->input('type');
        $dessert->price = request()->input('price');
        $dessert->calories = request()->input('calories');
        $dessert->fat = request()->input('fat');
        $dessert->carbohydrates = request()->input('carbohydrates');
        $dessert->protein = request()->input('protein');
        $dessert->vegetarian = $vegetarian;
        $dessert->description = request()->input('description');
        $dessert->image = request()->input('image');
        $dessert->save();

        return redirect('/backoffice/desserts');
    }
}

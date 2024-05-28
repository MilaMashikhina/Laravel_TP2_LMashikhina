<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessert;


class DessertController extends Controller
{
    public function index()
    {
        $desserts = Dessert::all();
        return view('web.desserts.index', compact('desserts'));
    }

    public function show($id)
    {
        $dessert = Dessert::find($id);

        if (!$dessert) {
            return redirect('/desserts');
        }

        return view('web.desserts.show', compact('dessert'));
    }
}

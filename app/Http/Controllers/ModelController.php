<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessert;

class ModelController extends Controller
{
    public function all()
    {
        return Dessert::all();
    }
}

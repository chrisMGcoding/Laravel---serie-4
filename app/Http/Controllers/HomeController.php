<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Legume;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $fruit = Fruit::all();
        $legume = Legume::all();
        return view('pages.home', compact('fruit', 'legume'));
    }

    public function create() {
        return view('pages.legume');
    }

    public function store(Request $request) {
        $table = new Legume;

        $table->name = $request->nomLegume;
        $table->quantity = $request->quantiteLegume;
        $table->save();

        return redirect('/');
    }
}

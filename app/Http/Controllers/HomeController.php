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

    public function destroy($id) {
        $legume = Legume::find($id);
        $legume->delete();

        return redirect()->back();
    }

    public function show($id) {
        $show = Legume::find($id);
        return view('pages.show', compact('show'));
    }

    public function edit($lid) {
        $user = Legume::find($lid);
        return view('pages.edit', compact('user'));
    }
    public function update($id, Request $request) {
        $user = Legume::find($id);
        $user->name = $request->nomLegume;
        $user->quantity = $request->quantiteLegume;
        $user->save();
        return redirect()->back();
    }

}

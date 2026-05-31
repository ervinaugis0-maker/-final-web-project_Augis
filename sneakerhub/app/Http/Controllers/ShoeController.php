<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{

    public function index()
    {
        $shoes = Shoe::all();
        return view('shoes.index', compact('shoes'));
    }

    public function create()
    {
        return view('shoes.create');
    }

    public function store(Request $request)
    {
        Shoe::create($request->all());
        return redirect()->route('shoes.index');
    }

    public function edit($id)
    {
        $shoe = Shoe::find($id);
        return view('shoes.edit', compact('shoe'));
    }

    public function update(Request $request, $id)
    {
        $shoe = Shoe::find($id);
        $shoe->update($request->all());

        return redirect()->route('shoes.index');
    }

    public function destroy($id)
    {
        $shoe = Shoe::find($id);
        $shoe->delete();

        return redirect()->route('shoes.index');
    }
}
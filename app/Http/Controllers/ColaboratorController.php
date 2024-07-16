<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborator;

class ColaboratorController extends Controller
{
    public function index()
    {
        $colaborators = Colaborator::all();
        return view('colaborators.index', compact('colaborators'));
    }

    public function create()
    {
        return view('colaborators.create');
    }

    public function store(Request $request)
    {
        Colaborator::create($request->all());
        return redirect()->route('colaborators.index');
    }

    public function show($id)
    {
        $colaborator = Colaborator::findOrFail($id);
        return view('colaborators.show', compact('colaborator'));
    }

    public function edit($id)
    {
        $colaborator = Colaborator::findOrFail($id);
        return view('colaborators.edit', compact('colaborator'));
    }

    public function update(Request $request, $id)
    {
        $colaborator = Colaborator::findOrFail($id);
        $colaborator->update($request->all());
        return redirect()->route('colaborators.index');
    }

    public function destroy($id)
    {
        $colaborator = Colaborator::findOrFail($id);
        $colaborator->delete();
        return redirect()->route('colaborators.index');
    }
}

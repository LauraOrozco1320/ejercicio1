<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;

class PayController extends Controller
{
    public function index()
    {
        $pays = Pay::all();
        return view('pays.index', compact('pays'));
    }

    public function create()
    {
        return view('pays.create');
    }

    public function store(Request $request)
    {
        Pay::create($request->all());
        return redirect()->route('pays.index');
    }

    public function show($id)
    {
        $pay = Pay::findOrFail($id);
        return view('pays.show', compact('pay'));
    }

    public function edit($id)
    {
        $pay = Pay::findOrFail($id);
        return view('pays.edit', compact('pay'));
    }

    public function update(Request $request, $id)
    {
        $pay = Pay::findOrFail($id);
        $pay->update($request->all());
        return redirect()->route('pays.index');
    }

    public function destroy($id)
    {
        $pay = Pay::findOrFail($id);
        $pay->delete();
        return redirect()->route('pays.index');
    }
}

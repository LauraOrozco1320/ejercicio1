<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypePay;

class TypePayController extends Controller
{
    public function index()
    {
        $typePays = TypePay::all();
        return view('typepays.index', compact('typePays'));
    }

    public function create()
    {
        return view('typepays.create');
    }

    public function store(Request $request)
    {
        TypePay::create($request->all());

        return redirect()->route('typepays.index');
    }

    public function show($id)
    {
        $typePay = TypePay::findOrFail($id);
        return view('typepays.show', compact('typePay'));
    }

    public function edit($id)
    {
        $typePay = TypePay::findOrFail($id);
        return view('typepays.edit', compact('typePay'));
    }

    public function update(Request $request, $id)
    {
        $typePay = TypePay::findOrFail($id);
        $typePay->update($request->all());

        return redirect()->route('typepays.index');
    }

    public function destroy($id)
    {
        $typePay = TypePay::findOrFail($id);
        $typePay->delete();

        return redirect()->route('typepays.index');
    }
}

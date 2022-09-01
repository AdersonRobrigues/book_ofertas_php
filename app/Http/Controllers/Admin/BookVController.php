<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookV;

class BookVController extends Controller
{
    public function store(Request $request)
    {
            $bookV = BookV::create($request->all());
        if ($bookV) {
            return redirect()->route('layouts.main.store');
        }
    }

    public function editar($id)
    {
        $offers = BookV::findOrFail($id);

       // dd($offers->operador);
        return view('layouts.editv',['offer'=>$offers]);
    }

    public function update(Request $request)
    {
        BookV::findOrFail($request->id)->update($request-> all());
        return redirect('/layouts/main/');
    }

    public function destroy($id)
    {
        BookV::findorFail($id)->delete();
        return redirect()->route('layouts.main.store')->with('success','Registro deletado com sucesso!');
    }
}



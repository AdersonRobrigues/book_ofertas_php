<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookCm;

class BookCMController extends Controller
{
    public function store(Request $request)
    {
            $bookCm = BookCm::create($request->all());
        if ($bookCm) {
            return redirect()->route('layouts.main.store');
        }
    }

    public function editar($id)
    {
        $offers = BookCm::findOrFail($id);

       // dd($offers->operador);
        return view('layouts.editcm',['offer'=>$offers]);
    }

    public function update(Request $request)
    {
        BookCm::findOrFail($request->id)->update($request-> all());
        return redirect('/layouts/main/');
    }

    public function destroy($id)
    {
        BookCm::findorFail($id)->delete();
        return redirect()->route('layouts.main.store')->with('success','Registro deletado com sucesso!');
    }
}

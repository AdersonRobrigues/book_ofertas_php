<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookVm;

class BookVMController extends Controller
{
    public function store(Request $request)
    {
            $bookVm = BookVm::create($request->all());
        if ($bookVm) {
            return redirect()->route('layouts.main.store');
        }
    }

    public function editar($id)
    {
        $offers = BookVm::findOrFail($id);

       // dd($offers->operador);
        return view('layouts.editvm',['offer'=>$offers]);
    }

    public function update(Request $request)
    {
        BookVm::findOrFail($request->id)->update($request-> all());
        return redirect('/layouts/main/');
    }

    public function destroy($id)
    {
        BookVm::findorFail($id)->delete();
        return redirect()->route('layouts.main.store')->with('success','Registro deletado com sucesso!');
    }
}

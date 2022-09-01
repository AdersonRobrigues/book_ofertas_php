<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        if($book){
        return redirect()->route('layouts.main.store');
        }
    }

    public function editar($id)
    {
        $offers = Book::findOrFail($id);

       // dd($offers->operador);
        return view('layouts.edit',['offer'=>$offers]);
    }

    public function update(Request $request)
    {
        Book::findOrFail($request->id)->update($request-> all());
        return redirect('/layouts/main/');
    }

    public function destroy($id)
    {
        Book::findorFail($id)->delete();
        return redirect()->route('layouts.main.store')->with('success','Registro deletado com sucesso!');
    }
}

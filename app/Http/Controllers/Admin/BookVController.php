<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookV;

class BookVController extends Controller
{
    public function homeView()
    {
        $listsV = BookV::all();
        return view('layouts.main',['book_v_s'=>$listsV,]);
    }

    public function store(Request $request)
    {
        $book_v_s = new BookV();

        $book_v_s->operador = $request->operador;
        $book_v_s->tp_energia = $request->tp_energia;
        $book_v_s->inicio = $request->inicio;
        $book_v_s->fim = $request->fim;
        $book_v_s->volume = $request->volume;
        $book_v_s->preco= $request->preco;
        $book_v_s->submercado= $request->submercado;
        $book_v_s->created_at = $request->created_at;
        $book_v_s->updated_at = $request->updated_at;

        $book_v_s->save();
        return redirect('layouts/main');
    }
}

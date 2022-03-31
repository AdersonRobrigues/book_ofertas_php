<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function homeView()
    {
        $lists = Book::all();
        //
        return view('layouts.main',['books'=>$lists]);
    }

    public function store(Request $request)
    {
        $book = new Book();

        $book->operador = $request->operador;
        $book->tp_energia = $request->tp_energia;
        $book->inicio = $request->inicio;
        $book->fim = $request->fim;
        $book->volume = $request->volume;
        $book->preco= $request->preco;
        $book->submercado= $request->submercado;
        $book->created_at = $request->created_at;
        $book->updated_at = $request->updated_at;

        $book->save();
        return redirect('layouts/main');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookV;
use App\Models\BookCm;
use App\Models\BookVm;


class BookController extends Controller
{
    public function homeView()
    {
        $lists = Book::all();
        $listsV = BookV::all();
        $listsCm = BookCm::all();
        $listsVm = BookVm::all();
        
       
        return view('layouts.main',['books'=>$lists,'bookV'=>$listsV,'bookCm'=>$listsCm,'bookVm'=>$listsVm]);
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        if($book){
            return redirect()->route('layouts.main.store');
        }
    }
}

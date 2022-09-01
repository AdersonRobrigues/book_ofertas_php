<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookCm;
use App\Models\BookV;
use App\Models\BookVm;

class ViewsController extends Controller
{
    public function homeView()
    {
        $lists = Book::all();
        $listsV = BookV::all();
        $listsCm = BookCm::all();
        $listsVm = BookVm::all();
        return view('layouts.main',['books'=>$lists,'bookV'=>$listsV,'bookCm'=>$listsCm,'bookVm'=>$listsVm]);
    }
    
}

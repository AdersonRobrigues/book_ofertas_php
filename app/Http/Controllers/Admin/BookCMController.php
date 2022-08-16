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

}

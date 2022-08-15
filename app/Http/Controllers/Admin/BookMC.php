<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookCM;
use Illuminate\Http\Request;

class BookMC extends Controller
{
    public function store(Request $request)
    {
        $bookCM = BookCM::create($request->all());
        if ($bookCM) {
            return redirect()->route('layouts.main.store');
        }
    }
}

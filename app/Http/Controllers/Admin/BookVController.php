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

}

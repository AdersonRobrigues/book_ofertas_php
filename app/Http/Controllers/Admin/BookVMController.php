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
}

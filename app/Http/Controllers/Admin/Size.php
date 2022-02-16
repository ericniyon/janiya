<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class Size extends Controller
{
    public function size()
    {
        return view('backend.pages.size');
    }

    public function save_size(Request $request)
    {
        $size = new ProductSize();
        $size->size = $request->size;

        $size->save();
        return redirect()->back()->with('message', 'Size have been generated successfully');
    }
}

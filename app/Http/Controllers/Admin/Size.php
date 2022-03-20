<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class Size extends Controller
{
    public function size()
    {
        $sizes = ProductSize::orderBy('size')->get();
        return view('backend.pages.size', compact('sizes'));
    }

    public function save_size(Request $request)
    {
        $this->validate($request,[
            'size'=>'required|string|min:1|max:5',
        ]);
        $size = new ProductSize();
        $size->size = $request->size;

        $size->save();
        return redirect()->back()->with('message', 'Size have been generated successfully');
    }

    public function delete_size(ProductSize $size)
    {
        $size->delete();
        return back()->with('success','Product Size Deleted Successfully!');
    }
}

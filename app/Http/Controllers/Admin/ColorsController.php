<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function colors()
    {
        $colors = Color::orderBy('color_name')->get();
        return view('backend.pages.colors',compact('colors'));
    }

    public function save_colors(Request $request)
    {
        $color = new Color();
        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;

        $color->save();
        return redirect()->back()->with('message', 'Color have been generated successfully');
    }

    public function delete_colors(Color $color)
    {
        $color->delete();
        return back()->with('success','Product Color Deleted Successfully!');
    }
}

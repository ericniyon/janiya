<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use App\Models\Color;
use Illuminate\Http\Request;
use Validator;

class ProAttController extends Controller
{
    public function showSize()
    {
        $sizes = ProductSize::orderBy('size')->get();
        if ($sizes) {
            return response()->json(['status' => true,'data' => $sizes], 200);
        }else {
            return response()->json(['status' => false,'data' => 'No Data To Display'], 200);
        }
    }

    public function save_size(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'size'=>'required|string|min:1|max:5|unique:product_sizes,size',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $size = new ProductSize();
        $size->size = $request->size;

        $size->save();
        return response()->json(['status' => true, 'data' => 'Size have been generated successfully','data' => $size], 200);
    }

    public function delete_size($size)
    {
        $results = ProductSize::where('id', $size)
                    ->delete();
        if ($results) {
            return response()->json(['status' => true, 'data' => 'Product Size Deleted Successfully!'], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'Product Size Deleted Failed!'], 200);
        }
    }

    public function showColor()
    {
        $colors = Color::all();
        if ($colors) {
            return response()->json(['status' => true,'data' => $colors], 200);
        }else {
            return response()->json(['status' => false,'data' => 'No Data To Display'], 200);
        }
    }

    public function save_color(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|unique:colors,color_name',
            'code'=>'required|string|min:4|max:9|unique:colors,color_code',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $color = new Color();
        $color->color_name = $request->name;
        $color->color_code = $request->code;

        $color->save();
        return response()->json(['status' => true, 'data' => 'Color have been generated successfully','data' => $color], 200);
    }

    public function delete_color($color)
    {
        $results = Color::where('id', $color)
                    ->delete();
        if ($results) {
            return response()->json(['status' => true, 'data' => 'Color Deleted Successfully!'], 200);
        }else {
            return response()->json(['status' => true, 'data' => 'Color Deleted Failed!'], 200);
        }
    }
}

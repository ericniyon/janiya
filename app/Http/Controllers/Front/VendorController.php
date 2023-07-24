<?php

namespace App\Http\Controllers\Front;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class VendorController extends Controller
{
    function show($id) {
        $vendor = Vendor::whereSlug($id)->firstOrFail();
        return view('frontend.pages.single-shop', compact('vendor'));
        try {
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Vendor not found');
        } catch (NotFoundHttpException $e) {
            return back()->with('error', 'Vendor not found');
        }
    }
}

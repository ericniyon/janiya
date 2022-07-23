<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AffiliateController extends Controller
{
    public function viewAll()
    {
        $affiliators = User::whereNotNull('affiliate_link')->get();
        if (is_array($affiliators)) {
        return response()->json(['status' => true, 'data' => $affiliators], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }
}

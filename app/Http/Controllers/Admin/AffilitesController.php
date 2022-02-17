<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AffilitesController extends Controller
{
    public function index()
    {
        $affiliators = User::whereNotNull('affiliate_link')->paginate(10);
        return view('backend.admin.affiliators',compact('affiliators'));
    }
}

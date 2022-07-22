<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Transaction;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:adminApi');
    }

    public function all_transaction()
    {
        $transaction = Transaction::orderBy('created_at')->get();
        if ($transaction) {
            return response()->json(['status' => true,'data' => $transaction], 200);
        }else {
            return response()->json(['status' => false,'data' => 'No Data To Display'], 200);
        }
    }
}

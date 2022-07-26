<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AffiliateController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminApi');
    }

    /**
     * @OA\Get(
     *      path="/api/admin/affiliators",
     *      operationId="getAffiliators",
     *      tags={"product"},
     *      summary="get affiliators list",
     *      description="select all affiliators stored in database",
     *
     *      security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function viewAll()
    {
        $affiliators = User::whereNotNull('affiliate_link')->get();
        if (is_array($affiliators)) {
        return response()->json(['status' => true, 'data' => $affiliators], 200);
        }else {
            return response()->json(['status' => true, 'data' => 'No data to display'], 200);
        }
    }
}

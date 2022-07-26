<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductAttribute;
use App\Models\StoreAttribute;
use App\Models\ProductSize;
use App\Models\Store;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class AccountController extends Controller
{
    /**
     * @OA\get(
     * path="/api/becameAffiliator",
     * summary="affiliator",
     * description="became affiliator",
     * operationId="becameAffiliator",
     *      security={{"bearer_token":{}}},
     *      tags={"account"},
     *      @OA\Response(
     *          response=200,
     *          description="Successfull."
     *     ),
     *      @OA\Response(
     *          response=204,
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
    public function becomeAffiliate()
    {
        if (Auth::getDefaultDriver()=="userApi") {
            $user = User::findOrFail(Auth::id());
            $user->update([
                'affiliate_link'=>str()->lower($this->getName($user))
            ]);
            return response()->json(['status' => true, 'message' =>'successfull registered as affiliator'], 200);
        }
        return response()->json(['status' => true, 'message' =>'please logged as user or client'], 200);
    }

    /**
     * @OA\Post(
     *      path="/api/changePassword",
     *      operationId="changePassword",
     *      tags={"account"},
     *      summary="change password",
     *      description="modify the system credential after logged in",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"password","current_password", "password_confirmation"},
    *               @OA\Property(property="password", type="password"),
    *               @OA\Property(property="password_confirmation", type="password"),
    *               @OA\Property(property="current_password", type="text"),
    *            ),
    *        ),
    *    ),
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
    public function updatePassword(Request $request)
    {
        if (Auth::getDefaultDriver()=="userApi") {
            $user = User::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'password'=>'string|required|min:6|max:64|confirmed',
                'current_password'=>['string','required',function ($attribute,$value,$fail) use ($user){
                    if(!Hash::check($value, $user->password)){
                        return $fail(__('Incorrect Current Password'));
                    }
                }],
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $user->update(['password'=>Hash::make($request->password)]);
            return response()->json(['status' => 'success','message' => 'Password Updated Successfuly!'], 200);
        }elseif (Auth::getDefaultDriver()=="vendorApi") {
            $user = Vendor::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'password'=>'string|required|min:6|max:64|confirmed',
                'current_password'=>['string','required',function ($attribute,$value,$fail) use ($user){
                    if(!Hash::check($value, $user->password)){
                        return $fail(__('Incorrect Current Password'));
                    }
                }],
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $user->update(['password'=>Hash::make($request->password)]);
            return response()->json(['status' => 'success','message' => 'Password Updated Successfuly!'], 200);
        }elseif (Auth::getDefaultDriver()=="adminApi") {
            $user = Admin::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'password'=>'string|required|min:6|max:64|confirmed',
                'current_password'=>['string','required',function ($attribute,$value,$fail) use ($user){
                    if(!Hash::check($value, $user->password)){
                        return $fail(__('Incorrect Current Password'));
                    }
                }],
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $user->update(['password'=>Hash::make($request->password)]);
            return response()->json(['status' => 'success','message' => 'Password Updated Successfuly!'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/updateProfile",
     *      operationId="changeProfile",
     *      tags={"account"},
     *      summary="change profile",
     *      description="modify the user information after logged in",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"name","phone", "address", "neighborhood"},
    *               @OA\Property(property="name", type="text"),
    *               @OA\Property(property="phone", type="text"),
    *               @OA\Property(property="profile", type="file"),
    *               @OA\Property(property="address", type="text"),
    *               @OA\Property(property="neighborhood", type="text"),
    *            ),
    *        ),
    *    ),
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
    public function updateProfile(Request $request)
    {
        if (Auth::getDefaultDriver()=="userApi") {
            $user = User::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'name'=>'required|string|min:5|max:120',
                'phone'=>'string|required|starts_with:25078,25079,25072,25073|digits:12',
                'profile'=>'sometimes|image|mimes:png,jpg,webp|max:800',
                'address'=>'string|required|max:80',
                'neighborhood'=>'string|required|',
                'street'=>'string|sometimes',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            if ($request->file('profile')) {
                if ($user->profile) {
                    Storage::disk()->delete($user->profile);
                }
                $fileName = str()->slug($request->name).time().'.'.$request->profile->extension();
                $profile = $request->profile->storeAs('Clients',$fileName,'public');
            } else{
                $profile = $user->profile;
            }

            $user->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'address1'=>$request->address,
                'neighborhood'=>$request->neighborhood,
                'street_name'=>$request->street,
                'profile'=>$profile,
            ]);

            return response()->json(['status' => 'success', 'message' => 'profile updated successfully!']);
        }elseif (Auth::getDefaultDriver()=="vendorApi"){
            $user = Vendor::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'name'=>'required|string|min:5|max:120',
                'phone'=>'string|required|starts_with:25078,25079,25072,25073|digits:12',
                'profile'=>'sometimes|image|mimes:png,jpg,webp|max:800',
                'address'=>'string|required|max:80',
                'neighborhood'=>'string|required|',
                'street'=>'string|sometimes',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            if ($request->file('profile')) {
                if ($user->profile) {
                    Storage::disk()->delete($user->profile);
                }
                $fileName = str()->slug($request->name).time().'.'.$request->profile->extension();
                $profile = $request->profile->storeAs('Clients',$fileName,'public');
            } else{
                $profile = $user->profile;
            }

            $user->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'address1'=>$request->address,
                'neighborhood'=>$request->neighborhood,
                'street_name'=>$request->street,
                'profile'=>$profile,
            ]);

            return response()->json(['status' => 'success', 'message' => 'profile updated successfully!']);
        }elseif (Auth::getDefaultDriver()=="adminApi") {
            $user = Admin::findOrFail(Auth::id());
            $validator = Validator::make($request->all(),[
                'name'=>'required|string|min:5|max:120',
                'phone'=>'string|required|starts_with:25078,25079,25072,25073|digits:12',
                'profile'=>'sometimes|image|mimes:png,jpg,webp|max:800',
                'address'=>'string|required|max:80',
                'neighborhood'=>'string|required|',
                'street'=>'string|sometimes',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            if ($request->file('profile')) {
                if ($user->profile) {
                    Storage::disk()->delete($user->profile);
                }
                $fileName = str()->slug($request->name).time().'.'.$request->profile->extension();
                $profile = $request->profile->storeAs('Clients',$fileName,'public');
            } else{
                $profile = $user->profile;
            }

            $user->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'address1'=>$request->address,
                'neighborhood'=>$request->neighborhood,
                'street_name'=>$request->street,
                'profile'=>$profile,
            ]);

            return response()->json(['status' => 'success', 'message' => 'profile updated successfully!']);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/test",
     *      operationId="userOrder",
     *      tags={"account"},
     *      summary="user orders",
     *      description="get the user orders",
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
    public function clientOrder()
    {
        $orders = Auth::user()->orders()
                        ->when($this->starting_date,function($query1){
                            return $query1->whereDate('created_at','>=',$this->starting_date);
                        })
                        ->when($this->until,function($query){
                            return $query->whereDate('created_at','>=',$this->until);
                        })
                        ->orderByDesc('created_at')
                        ->get();
        return response()->json(['status' =>'success','message' => $orders]);
    }
}

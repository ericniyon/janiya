<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function vendorAccountForm()
    {
        return view('auth.register',['url'=>'vendor']);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10', 'max:12', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function storeVendor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'shop_name' => ['required', 'string', 'min:3', 'max:120', 'unique:vendors'],
            'phone' => ['required', 'string', 'min:10', 'max:12',],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Vendor::create([
            'name' => $request->name,
            'location' => $request->location,
            'contact_person' => $request->name,
            'email' => $request->email,
            'contact_person_email' => $request->email,
            'phone' => $request->phone,
            'contact_person_phone' => $request->phone,
            'shop_name' => $request->shop_name,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        Auth::guard('vendor')->login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

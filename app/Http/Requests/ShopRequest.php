<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'=>'required|string|min:10|max:12|unique:vendors,phone',
            'contact_person'=>'required|string|min:3|max:120',
            'details'=>'required|string|max:255',
            'location'=>'nullable|string|min:3|max:120',
            'profile_image'=>'nullable|image|mimes:png,jpg,webp|max:1024',
            'cover_image'=>'nullable|image|mimes:png,jpg,webp|max:1024',
        ]
        +
        ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    function store() {
        return [
            'shop_name'=>'required|string|min:3|max:120|unique:vendors,shop_name',
            'email'=>'required|email|string|min:5|max:120|unique:vendors,email',
            'contact_person_email'=>'required|email|string|min:5|max:120|unique:vendors,contact_person_email',
            'contact_person_phone'=>'required|string|min:10|max:12|unique:vendors,contact_person_phone',
        ];
    }

    function update() {
        return [
            'shop_name'=>'required|string|min:3|max:120|unique:vendors,shop_name,'.$this->vendor->id,
            'email'=>'required|email|string|min:5|max:120|unique:vendors,email,'.$this->vendor->id,
            'contact_person_email'=>'required|email|string|min:5|max:120|unique:vendors,contact_person_email,'.$this->vendor->id,
            'contact_person_phone'=>'required|string|min:10|max:12|unique:vendors,contact_person_phone,'.$this->vendor->id,
        ];
    }
}

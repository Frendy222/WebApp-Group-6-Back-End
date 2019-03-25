<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            //
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'smoke_status' => 'required'
        ];
    }

    public function messages(){
        return [
            'first_name.required' => 'first_name is required',
            'last_name.required' => 'last_name is required',
            'email.required' => 'email is required!',
            'password.required' => 'password is required!',
            'age.required' => 'age is required!',
            'gender.required' => 'gender is required!',
            'smoke_status.required' => 'smoke_status is required!'
        ];
    }
}

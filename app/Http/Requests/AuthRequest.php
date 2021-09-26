<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $path = $request->getPathInfo();
        if($path='/api/login'){
            $validation = [
                'email' => 'required|email',
                'password' => 'required',
                'device_name' => 'required',
            ];
        }else{
            $validation = [
                'name'                  => ['required'],
                'email'                 => ['required', 'email', 'unique:users'],
                'password'              => ['required', 'min:6', 'confirmed'],
                'password_confirmation' => ['required'],
            ];
        }
    }
}

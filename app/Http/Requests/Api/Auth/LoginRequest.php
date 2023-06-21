<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email" => "email|exists:users,email",
            'password' => ['required', function ($attr, $value, $fail) {
                $people = \App\Models\User::where('email', $this->request->get('email'))->first();
                if ($people && !(Hash::check($value, $people->password))) {
                    $fail($attr . ' tidak valid');
                }
            }],
        ];
    }

}

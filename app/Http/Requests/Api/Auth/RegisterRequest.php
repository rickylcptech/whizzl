<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use DB;

class RegisterRequest extends FormRequest
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
            "nik" => "required|unique:users,nik|min:16|numeric",
            "no_kk" => "required|min:16|numeric",
            "email" => "email|unique:users,email",
            "nama" => "required",
            "no_hp" => 'required',
            "password" => "required|min:6",
            'password_confirmation' => 'required',
            'provinsi' => ['required', function ($attr, $value, $fail) {
                $provinsi = \App\Models\WilayahIndonesia::where(DB::raw('LENGTH(kode)'), '=', '2')
                    ->where('nama', $this->request->get('provinsi'))->first();

                if (!$provinsi) {
                    $fail($attr . ' tidak valid.');
                }
            }],
            'kabupaten' => ['required', function ($attr, $value, $fail) {
                $kabupaten = \App\Models\WilayahIndonesia::where(DB::raw('LENGTH(kode)'), '=', '5')
                    ->where('nama', $this->request->get('kabupaten'))->first();
                if (!$kabupaten) {
                    $fail($attr . ' tidak valid.');
                }
            }],
            'kecamatan' => ['required', function ($attr, $value, $fail) {
                $kecamatan = \App\Models\WilayahIndonesia::where(DB::raw('LENGTH(kode)'), '=', '8')
                    ->where('nama', $this->request->get('kecamatan'))->first();
                if (!$kecamatan) {
                    $fail($attr . ' tidak valid.');
                }
            }],
            'desa' => ['required', function ($attr, $value, $fail) {
                $desa = \App\Models\WilayahIndonesia::where(DB::raw('LENGTH(kode)'), '=', '13')
                    ->where('nama', $this->request->get('desa'))->first();
                if (!$desa) {
                    $fail($attr . ' tidak valid.');
                }
            }],
        ];
    }
}

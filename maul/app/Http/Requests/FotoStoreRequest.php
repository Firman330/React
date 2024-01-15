<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('post')) {
            return [
                'judul' => 'required|string|max:200',
                'deskripsi' => 'required|string',
                'tanggal_upload' => 'required|date',
                'lokasi_file' => 'required|string|max:200'
            ];
        } else {
            return [
                'judul' => 'required|string|max:200',
                'deskripsi' => 'required|string',
                'tanggal_upload' => 'required|date',
                'lokasi_file' => 'required|string|max:200'
            ];
        }
    }
    public function messages()
    {
        if(request()->isMethod('post')) {
            return [
                'judul.required' => 'Judul Diisi !',
                'deskripsi.required' => 'isi dong',
                'tanggal_upload.required' => 'isi dong',
                'lokasi_file.required' => 'be isikoh'
            ];
        } else {
            return [
                'judul.required' => 'Judul Diisi !',
                'deskripsi.required' => 'isi dong',
                'tanggal_upload.required' => 'isi dong',
                'lokasi_file.required' => 'be isikoh'
            ];
        }
    }
}

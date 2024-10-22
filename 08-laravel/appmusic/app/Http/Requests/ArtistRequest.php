<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Artist;

class ArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->method() === 'PUT') {
            return [
                'fullname' => 'required|string',
                'gender' => 'required',
                'birthdate' => 'required|date',
                'photo' => ['required', 'image'],
                'phone' => 'required'

            ];
        } else {
            return [
                'document' => ['required', 'numeric', 'unique:'.Artist::class],
                'fullname' => ['required', 'string'],
                'gender' => ['required'],
                'birthdate' => ['required', 'date'],
                'photo' => ['required', 'image'],
                'phone' => ['required'],
                'email' => ['required', 'string', 'lowercase', 'email', 'unique:'.Artist::class],
                
            ];
        }
    }

    public function messages(): array
    {
        return [
            'fullname.required' => 'The: atribute is required'
        ];
    }

    public function attributes(): array
    {
        return [
            'fullname' => 'Fullname'
        ];
    }
}


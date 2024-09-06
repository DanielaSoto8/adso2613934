<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Song;

class SongRequest extends FormRequest
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
                'id'=> 'required,'.$this->ano_publicacion,
                'ano_publicacion' => 'required|date',
                'nombre_cancion' => 'required|string',
                'artista' => 'required|string',
                'genero' => 'required|string',
                'photo' => 'required|image',
    
            ];
        } else {
            return [
                'ano_publicacion' => ['required', 'date'],
                'nombre_cancion' => ['required', 'string'],
                'artista' => ['required', 'string'],
                'genero' => ['required', 'string'],
                'photo' => ['required', 'image']
            ];
        }
    }

    public function messages(): array
    {
        return [
            'nombre_cancion.required' => 'The: atribute is required'
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre_cancion' => 'nombre_cancion'
        ];
    }
}


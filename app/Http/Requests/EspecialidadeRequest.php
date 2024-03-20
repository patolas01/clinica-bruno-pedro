<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspecialidadeRequest extends FormRequest
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
        $currentId = $this->especialidade ? $this->especialidade->id : null;
        return [
        "nome" => 'required|min:3|max:80|unique:especialidades,nome,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
        "curta_desc" =>'required|min:15',
        'icon' =>$this->especialidade ? 'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'icon.max' => 'Imagem demaisado grande',
            'icon.mimes' => 'A imagem deve ter um dos seguintes formatos: jpg, png, jpeg, gif, svg',
            'icon.max' => 'A imagem não deve exceder 2MB',
        ];
    }
}

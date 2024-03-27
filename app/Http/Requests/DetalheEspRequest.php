<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetalheEspRequest extends FormRequest
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
        $currentId = $this->detalheesp ? $this->detalheesp->id : null;
        return [
            "descriçao" =>'required|min:15',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'especialidade_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'imagem.max' => 'Imagem demaisado grande',
            'imagem.mimes' => 'A imagem deve ter um dos seguintes formatos: jpg, png, jpeg, gif, svg',
            'imagem.max' => 'A imagem não deve exceder 2MB',
        ];
    }
}

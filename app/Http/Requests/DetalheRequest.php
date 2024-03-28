<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetalheRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Por padrão, vamos permitir todas as solicitações. Você pode ajustar conforme necessário.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descriçao' => 'required',
            'especialidade_id' => 'required|exists:especialidades,id',
        ];
    }

    /**

     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'imagem.required' => 'A imagem é obrigatória.',
            'imagem.image' => 'O arquivo enviado deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'imagem.max' => 'A imagem não deve ser maior que 2MB.',
            'descriçao.required' => 'A descrição é obrigatória.',
            'especialidade_id.required' => 'A especialidade é obrigatória.',
            'especialidade_id.exists' => 'A especialidade selecionada é inválida.',
        ];
    }
}

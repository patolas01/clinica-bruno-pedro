<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
            'contacto' => 'required',
            'nome' => 'required',
            'email' => 'required|email',
            'especialidade_id' => 'required|exists:especialidades,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'contacto.required' => 'O campo contacto é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de email válido.',
            'especialidade_id.required' => 'O campo especialidade é obrigatório.',
            'especialidade_id.exists' => 'A especialidade selecionada é inválida.',
        ];
    }
}

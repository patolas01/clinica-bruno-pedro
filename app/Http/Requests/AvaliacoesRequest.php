<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacoesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /*Get the validation rules that apply to the request.*
    @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>*/

    public function rules(): array
{
    $currentId = $this->avaliacoes ? $this->avaliacoes->id : null;
    return [
        'classificacao' => 'required|in:0,1,2,3,4,5',
        'texto' => 'required|string|max:150',
    ];
}

public function messages()
    {
        return [
            'classificacao' => 'Avalie de 1 a 5',
            'texto' => 'O comentário não pode ter mais de 150 caracteres.',
        ];
    }

}

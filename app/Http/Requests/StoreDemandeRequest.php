<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemandeRequest extends FormRequest
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
    return [
        'offer_id' => 'required|exists:offre_livraisons,id',
        'poids' => 'required|numeric|min:1',
        'description' => 'required|min:5',
    ];
}

public function messages()
{
    return [
        'offer_id.required' => 'Offre obligatoire',
        'poids.required' => 'Poids obligatoire',
        'poids.numeric' => 'Poids doit être un nombre',
        'description.required' => 'Description obligatoire',
    ];
}
}

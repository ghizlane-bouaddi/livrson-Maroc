<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOffreRequest extends FormRequest
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
        'type_vehicle_id' => 'required|exists:type_vehicles,id',
        'ville_depart_id' => 'required|exists:villes,id',
        'ville_arrive_id' => 'required|exists:villes,id|different:ville_depart_id',
        'prix' => 'required|numeric|min:0',
        'description' => 'nullable'
    ];
}
}

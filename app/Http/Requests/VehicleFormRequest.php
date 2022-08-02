<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'makes_id' => [
                'required',
                'integer'
            ],
            'models_id' => [
                'required',
                'integer'
            ],
            'year' => [
                'required',
                'string'
            ],
            'color' => [
                'required',
                'string'
            ],
            'capacity' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'transmission_id' => [
                'required',
                'integer'
            ],
            'body_id' => [
                'required',
                'integer'
            ],
            'drive_id' => [
                'required',
                'integer'
            ],
            'features' => [
                'nullable',
                
            ],
           
            'fuel' => [
                    'required',
                    'string',

            ],
            'image' => [
                'nullable',
                //'image|mimes:jpeg,png,jpg'
            ],
            'main_image' => [
                'nullable',
                'image',
                'mimes:png,jpeg,jpg'
            ],
            

        ];
    }
}

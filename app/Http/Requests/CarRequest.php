<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'title'=>['required'],
            'company_id'=>['required'],
            'transmission'=>['required'],
            'model'=>['required'],
            'engine'=>['required'],
            'fuel'=>['required'],
            'chasis_no'=>['required'],
            'registration_year'=>['required'],
            'doors'=>['required'],
            'model_code'=>['required'],
            'weight'=>['required'],
            'seats'=>['required'],
            'steering'=>['required'],
            'location'=>['required'],
            'color'=>['required'],
            'description'=>['required'],
            'featured' => ['required'],
            'car_images.*'=>['nullable','file','mimes:jpeg,png'],
            'car_images_new.*'=>['nullable','file','mimes:jpeg,png'],
        ];
    }
}

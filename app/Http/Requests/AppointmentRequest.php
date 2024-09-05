<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     */

    public function messages()
    {
        return [
            'patient_id.required' => 'The patient field is required.',
            'doctor_id.required' => 'The doctor field is required.',
            'date.required' => 'The date field is required.',
            'time.required' => 'The time field is required.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DoctorStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['male', 'female', 'other'])],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:100'],
            'degree' => ['required', 'string', 'max:100'],
            'fees' => ['required', 'numeric', 'min:0'],
            'experience' => ['nullable', 'integer', 'min:0'],
            'slot_duration' => ['required', 'integer', 'min:5', 'max:60'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'schedules' => ['required', 'array', 'min:1'],
            'schedules.*.week_day' => ['required', Rule::in(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'])],
            'schedules.*.start_time' => ['required', 'date_format:H:i'],
            'schedules.*.end_time' => ['required', 'date_format:H:i', 'after:schedules.*.start_time'],
        ];
    }



    /**
     * Get custom messages for validator errors.
     */

    public function messages()
    {
        return [
            'schedules.*.week_day.in' => 'The selected week day is invalid.',
            'schedules.*.start_time.date_format' => 'The start time must be in the format HH:MM.',
            'schedules.*.end_time.date_format' => 'The end time must be in the format HH:MM.',
            'schedules.*.end_time.after' => 'The end time must be after the start time.',
        ];
    }
}

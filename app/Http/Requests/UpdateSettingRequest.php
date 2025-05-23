<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address'   => ['required', 'string', 'max:255'],
            'phone'     => ['required', 'string', 'max:20'],
            'email'     => ['required', 'email', 'max:255'],
            'facebook'  => ['nullable', 'url'],
            'twitter'   => ['nullable', 'url'],
            'youtube'   => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'linkedin'  => ['nullable', 'url'],
        ];
    }
}

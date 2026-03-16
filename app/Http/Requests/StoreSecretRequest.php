<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSecretRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'password' => ['required', 'string', 'max:10000'],
            'max_views' => ['nullable', 'integer', 'min:1', 'max:100'],
            'expires_at' => ['nullable', 'date', 'after:now'],
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => __('ui.validation.password_required'),
            'password.max' => __('ui.validation.password_max'),
            'max_views.integer' => __('ui.validation.max_views_integer'),
            'max_views.min' => __('ui.validation.max_views_min'),
            'max_views.max' => __('ui.validation.max_views_max'),
            'expires_at.date' => __('ui.validation.expires_at_date'),
            'expires_at.after' => __('ui.validation.expires_at_after'),
        ];
    }
}


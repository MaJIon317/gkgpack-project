<?php

namespace App\Http\Requests;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'role' => 'required|string|in:' . implode(',', array_column(UserRole::cases(), 'value')),
            'name' => 'required|string|min:5',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'sometimes|nullable|min:8',
            'timezone' => 'nullable|in:' . timezones()->keys()->implode(','),
        ];
    }
}

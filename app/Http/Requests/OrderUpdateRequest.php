<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->hasRole(['admin']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'sometimes|nullable|exists:users,id',
            'name' => 'required|string|min:3|max:250',
            'barcode' => 'required|string|min:3|max:250|unique:orders,barcode,' . $this->order->id,
            'note' => 'sometimes|nullable|min:5',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinanceLogRequest extends FormRequest
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
            'transaction_date' => 'required|date',
            'type' => 'required|in:expense,income',
            'payment_method' => 'required|in:cash,non_cash',
            'description' => 'required|max:50',
            'nominal' => 'required|integer|min:1000',
            'category_id' => 'exists:categories,id'
        ];
    }
}

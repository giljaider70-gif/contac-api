<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    
    public function authorize(): bool
{
    return true; 
}

public function rules(): array
{
    return [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:50',
        'email' => 'nullable|email|max:255|unique:contacts,email',
    ];
}
}

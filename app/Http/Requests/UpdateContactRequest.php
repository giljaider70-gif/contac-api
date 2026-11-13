<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    
    public function authorize(): bool
{
    return true; // Cambiar a true
}

public function rules(): array
{
    $contactId = $this->route('contact'); 

    return [
        'name' => 'sometimes|required|string|max:255',
        'phone' => 'sometimes|required|string|max:50',
        'email' => 'sometimes|required|email|max:255|unique:contacts,email,' . $contactId,
    ];
}
}

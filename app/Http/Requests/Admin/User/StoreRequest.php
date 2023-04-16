<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            'role' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должно быть типом строка',
            'email.required' => 'Это поле необходимо заполнить',
            'email.string' => 'Это поле должно быть типом строка',
            'email.unique' => 'Пользователь с такой почтой уже существует',
            'email.email' => 'Ваша почта должна соответствовать шаблону example@mail.ru',
            'password.required' => 'Это поле необходимо заполнить',
            'password.string' => 'Это поле должно быть типом строка',
        ];
    }
}

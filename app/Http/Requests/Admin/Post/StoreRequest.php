<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
            'is_published' => 'nullable|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Данные должны быть строкой',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Данные должны быть строкой',
            'preview_image.required' => 'Это поле необходимо заполнить',
            'preview_image.file' => 'Данные должны быть типом файл',
            'main_image.required' => 'Это поле необходимо заполнить',
            'main_image.file' => 'Данные должны быть типом файл',
            'category_id.required' => 'Это поле необходимо заполнить',
            'category_id.integer' => 'Данные должны быть типом число',
            'category_id.exists' => 'Данные должны существовать в БД',
            'tag_ids.array' => 'Необходимо отправить массив данных'
        ];
    }
}

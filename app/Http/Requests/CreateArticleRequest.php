<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class CreateArticleRequest extends FormRequest
{
    /**
     * Transform the error messages into JSON
     *
     * @param array $errors
     * @return JsonResponse
     */

    public function response(array $errors): JsonResponse
    {
        return response()->json($errors, 422);
    }


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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'content' => ['required']
        ];
    }
}

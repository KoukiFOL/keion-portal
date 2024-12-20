<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'regex:/@cc\.kyoto-su\.ac\.jp$/', Rule::unique(User::class)->ignore($this->user()->id)],
            'grade' => ['required', 'integer', 'min:1', 'max:4'],     // 学年のバリデーション
            'birthday' => ['required', 'date'],                        // 生年月日のバリデーション
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'first_number' => 'required|numeric|max_digits:5',
            'middle_number' => 'required|numeric|max_digits:5',
            'last_number' => 'required|numeric|max_digits:5',
            'address' => 'required',
            'category_id' => 'required',
            'detail' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'first_number.required' => '電話番号を入力してください',
            'middle_number.required' => '電話番号を入力してください',
            'last_number.required' => '電話番号を入力してください',
            'first_number.numeric' => '電話番号は5桁までの数字で入力してください',
            'middle_number.numeric' => '電話番号は5桁までの数字で入力してください',
            'last_number.numeric' => '電話番号は5桁までの数字で入力してください',
            'first_number.max_digits' => '電話番号は5桁までの数字で入力してください',
            'middle_number.max_digits' => '電話番号は5桁までの数字で入力してください',
            'last_number.max_digits' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合せ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}

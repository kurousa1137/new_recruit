<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
      return [
        'username' => 'required',
        'kana' => 'required',
        'gender' => 'required',
        'email' => 'required | email',
        'age' => 'required | digits_between:2,2',
        'tel' => 'required | digits_between:10,11',
        'pref' => 'required',
        'city' => 'required',
        'address' => 'required',
        'job' => 'required',
        'rirekisho' => 'file | mimes:pdf',
        'shokumukeirekisho' => 'file | mimes:pdf',
      ];
    }
}

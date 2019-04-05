<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenCvRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|max:255',
            'surname'   => 'required|max:255',
            'salary'      => 'required|in:1,2,3',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required'     => 'Musisz podać imię.',
            'name.max'          => 'Imię nie może przekraczać 255 znaków.',

            'surname.required'  => 'Musisz podać nazwisko.',
            'surname.max'       => 'Nazwisko nie może przekraczać 255 znaków.',
        ];
    }
}

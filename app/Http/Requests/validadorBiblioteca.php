<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBiblioteca extends FormRequest
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
            'txtISBN' => 'int|min:13',
            'txtTitulo' => 'min:4',
            'txtAutor' => 'min:4',
            'txtPaginas' => 'min:2',
            'txtEditorial' => 'min:10',
            'txtEmail' => 'email|min:4',
        ];
    }
}

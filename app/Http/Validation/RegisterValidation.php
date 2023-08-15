<?php 

namespace App\Http\Validation;


class RegisterValidation {
    public function rules() {
        return [
            'name' => ['required', 'string', 'max:150', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:150', 'min:3', 'unique:users'],
        ];
    }


    public function messages() {
        return [
            'name.required' => 'Vous devez specifier votre nom',
            'email.required' => 'Vous devez specifier votre email',
            'email.unique' => 'Cet email est deja utilise',

        ];
    }
}
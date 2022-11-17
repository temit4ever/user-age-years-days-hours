<?php
namespace App\ValidationRules\User;
trait UserValidation
{
    public function rules(): array
    {
        return [
            'firstname' => [
                'required',
                'string',
            ],
            'lastname' => [
                'required',
                'string',
            ],
            'dob' => [
                'required',
            ],
        ];
    }

}

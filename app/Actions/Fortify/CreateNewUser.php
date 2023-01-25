<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'nida' => ['required', 'integer', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            /* 'second_phone_number' => ['string', 'max:255'], */
            'gender' => ['int'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();


        return User::create([
            'first_name' => $input['first_name'],
            'middle_name' => $input['middle_name'],
            'last_name' => $input['last_name'],
            'nida' => $input['nida'],
            'phone_number' => $input['phone_number'],
            'second_phone_number' => $input['second_phone_number'],
            'gender' => $input['gender'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}

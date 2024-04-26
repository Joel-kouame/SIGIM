<?php

namespace App\Validation;

use  App\Models\UserModel;

class Userrules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }

    public function validateUser($str, $fields, $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])
            ->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['mdp'], $user['mdp']);
    }
}

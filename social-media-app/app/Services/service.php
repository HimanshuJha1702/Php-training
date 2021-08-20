<?php
namespace App\Services;

use App\Models\User;

class UserService {

    public function createuser($firstname, $lastname, $email)
    {
        $user = new User;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->save();

        return response()->json([
            "message" => "User succsessfully created!"
        ]);
    }

}

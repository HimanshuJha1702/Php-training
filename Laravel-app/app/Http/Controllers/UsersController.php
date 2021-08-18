<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function getAllUsers()
    {
        $users = DB::table('user')->get() ; //fetch all users from DB
        return response()->json([
            'User'=>$users
        ]);
    }

    public function createUser(input $input)
    {
        DB::table('user')->insert([
            'id' => $input->id,
            'firstName' => $input->firstName,
            'lastName' => $input->lastName,
        ]);
        response()->json([
            "message" => "User succsessfully created!"
        ]);
    }

    public function showUserById($id)
    {
        $user = DB::table('user')->where('id', $id)->first();
        return response()->json([
            'User'=>$user
        ]);
    }


    public function deleteUser($id)
    {
        DB::table('user')->delete($id);
        return response()->json([
            "message" => "user deleted!"
        ]);
    }

}

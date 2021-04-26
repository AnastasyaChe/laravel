<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteService {
    public function userLogin(User $user) {
        $email = $user->getEmail();
        $userData = \App\Models\User::where('email', $email)->first();
        if($userData) {
            $userData->fill([
                'name' => $user->getName(),
                'avatar' => $user->getAvatar() 
            ])->save();
            Auth::loginUsingId($userData->id);
        }
    }
}
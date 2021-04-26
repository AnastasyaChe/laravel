<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use SocialiteService;
use App\Models\User;

class SocialiteController extends Controller
{
    public function init () {
        return Socialite::driver('vkontakte')->redirect();
    }
    public function callback(SocialiteService $service) {
        $user = Socialite::driver('vkontakte')->user();
        $service->userLogin($user);
        return redirect()->route('admin.news.index');
    }
}

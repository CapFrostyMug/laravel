<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Services\Contracts\Social;
use Laravel\Socialite\Contracts\User as SocialUser;
use Illuminate\Support\Facades\Auth;

class SocialService implements Social
{
    public function loginAndGetRedirectUrl(SocialUser $socialUser): string
    {
        // 1. Проверяем существует ли user в нашей БД
        $user = User::query()
            ->where('email', '=', $socialUser->getEmail())
            ->first();

        // 2. Если user-а не существует, то перенаправляем на регистрацию
        if (is_null($user)) {
            return route('register');
        }

        // 3. Если user существует, то обновляем у него следующие поля:
        $user->name = $socialUser->getName();
        //$user->avatar = $socialUser->getAvatar();

        // 4. Сохраняем user-a; если всё успешно, то авторизуем и перенаправляем его
        if ($user->save()) {
            Auth::loginUsingId($user->id);

            return route('home');
        }

        throw new \Exception("Didn't save user");
    }
}

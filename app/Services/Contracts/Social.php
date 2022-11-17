<?php

declare(strict_types=1);

namespace App\Services\Contracts;

use \Laravel\Socialite\Contracts\User as SocialUser;

interface Social
{
    /**
     * @param SocialUser $socialUser
     * @return string
     */
    /* Если user существует (его email есть в БД), мы его авторизуем;
       В противном случае мы его авторизуем и в service возвращаем ссылку
       на redirect, куда нужно перенаправить user-а.

       Если user не зарегистрирован, мы перенаправляем его на регистрацию.
     */
    public function loginAndGetRedirectUrl(SocialUser $socialUser): string;
}

<?php

namespace App\Services\Admin;

use App\Repositories\Admin\UserRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserServices
 *
 * @package App\Services\Admin
 */
class UserServices
{
    protected UserRepository $user;

    /**
     * UserServices constructor
     *
     * @param  UserRepository $user
     * @return void
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * do a login
     *
     * @param array $data
     * @return bool
     */
    public function doLogin(array $data): bool
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return true;
        }

        return false;
    }
}

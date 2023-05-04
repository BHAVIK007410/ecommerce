<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\Admin\UserServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Exception;

/**
 * Class SiteController
 * 
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{
    protected $user;

    /**
     * SiteController __construct
     *
     * @param UserServices $user
     * @return void
     */
    public function __construct(UserServices $user)
    {
        $this->user = $user;
    }

    /**
     * login
     *
     * @return view
     */
    public function login(): View
    {
        return view('login');
    }

    /**
     * doLogin
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function doLogin(LoginRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $loginSuccess = $this->user->doLogin($data);
            if ($loginSuccess) {
                if (Auth::user()->user_type == 1) {
                    return redirect()->route('admin.admin-dash')->with('success', 'Admin Login Successful');
                }

                if (Auth::user()->user_type == 2) {
                    return redirect()->route('user.user-dash')->with('success', 'User Login Successful');
                }
            }

            return redirect()->back()->with('error', 'Email or password wrong.');
        } catch (Exception $ex) {
            return redirect()->route('login')->with('error', $ex->getMessage());
        }
    }

    /**
     * adminDash
     *
     * @return View
     */
    public function adminDash(): View
    {
        return view('admin.dashboard');
    }

    /**
     * adminDash
     *
     * @return View
     */
    public function userDash(): View
    {
        return view('users.dashboard');
    }

    /**
     * adminLogout
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function adminLogout(): RedirectResponse
    {
        try {
            if (Auth::user()->user_type == 1) {
                Auth::logout();
                return redirect()->route('login')->with('success', 'Admin user logout Successful.');
            }
        } catch (Exception $ex) {
            return redirect()->route('admin.admin-dash')->with('error', $ex->getMessage());
        }
    }

    /**
     * userLogout
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function userLogout(): RedirectResponse
    {
        try {
            if (Auth::user()->user_type == 2) {
                Auth::logout();
                return redirect()->route('user.login')->with('success', 'User logout Successful.');
            }
        } catch (Exception $ex) {
            return redirect()->route('user.user-dash')->with('error', $ex->getMessage());
        }
    }
}

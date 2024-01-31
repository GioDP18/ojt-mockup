<?php

namespace App\Http\Services;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

interface AuthService
{
    /**
     * Undocumented function
     */
    public function __construct();

    /**
     * Undocumented function
     *
     * @param AuthRequest $request
     * @return void
     */
    public function login(AuthRequest $request);

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request);

    /**
     * Undocumented function
     *
     * @return void
     */
    public function logout();

    /**
     * Undocumented function
     *
     * @return void
     */
    public function refresh();

    /**
     * Undocumented function
     *
     * @return void
     */
    public function userProfile();

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function veifyToken(Request $request);
}

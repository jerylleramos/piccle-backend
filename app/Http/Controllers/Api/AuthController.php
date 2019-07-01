<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * AuthService instance.
     *
     * @var App\Services\AuthService $authService
     */
    private $authService;

    /**
     * Class constructor.
     *
     * @param App\Services\AuthService $authService
     * @return void
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Request an access token.
     *
     * @param Illuminate\Http\Request $request
     * @return mixed
     */
    public function login(Request $request)
    {
        return $this->authService->authenticate($request);
    }

    /**
     * Create an account for a user.
     *
     * @param Illuminate\Http\Request $request
     * @return mixed
     */
    public function register(Request $request)
    {
        return $this->authService->create($request);
    }

    /**
     * Request a refresh token.
     *
     * @param Illuminate\Http\Request $request
     * @return mixed
     */
    public function getAuthenticatedUser(Request $request)
    {
        return $this->authService->getAuthenticatedUser($request);
    }
}

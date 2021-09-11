<?php

namespace App\Containers\AppSection\Authentication\UI\WEB\Controllers;

use App\Containers\AppSection\Authentication\Actions\WebLogoutAction;
use App\Containers\AppSection\Authentication\UI\WEB\Requests\LogoutRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class LogoutController extends WebController
{
    public function logout(LogoutRequest $request): Redirector|Application|RedirectResponse
    {
        app(WebLogoutAction::class)->run();
        return redirect('/');
    }
}
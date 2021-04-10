<?php

namespace App\Containers\AppSection\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\AppSection\User\UI\API\Requests\DeleteUserRequest;
use App\Ship\Parents\Actions\Action;

class DeleteUserAction extends Action
{
    public function run(DeleteUserRequest $data): void
    {
        $user = $data->id ?
            Apiato::call('User@FindUserByIdTask',
                [$data->id]) : Apiato::call('Authentication@GetAuthenticatedUserTask');

        Apiato::call('User@DeleteUserTask', [$user]);
    }
}
<?php

namespace App\Repositories\UserService;

use App\Models\User;
use App\Repositories\BaseStructureService\BaseStructureRepository;
use App\Repositories\UserService\Interface\UserInterface;

class UserRepository extends BaseStructureRepository implements UserInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}

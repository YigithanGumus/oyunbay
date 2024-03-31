<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\UserService\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $users = $this->userRepository->all();
    }

    public function create()
    {
        // Return view for creating a user
    }

    public function store(Request $request)
    {
       return $this->userRepository->store($request->all());
    }

    public function show(string $id)
    {
        return $user = $this->userRepository->show($id);
    }

    public function edit(string $id)
    {
        // Get the user for editing using UserRepository
        // Return view with the user data
    }

    public function update(Request $request, string $id)
    {
        return $this->userRepository->update($id, $request->all());
    }

    public function destroy(string $id)
    {
        return $this->userRepository->destroy($id);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserService\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group User API
 *
 */
class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * User List All
     *
     * Kullanıcı listesini çekmektedir.
     *
     */
    public function index()
    {
        return $users = $this->userRepository->all();
    }

    public function create()
    {
        // Return view for creating a user
    }

    /**
     * User Create
     *
     * Kullanıcı kayıt kısmıdır.
     *
     */
    public function store(Request $request)
    {
        $registerUserData = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8',
            'username'=>'required|min:3|string|unique:users'
        ]);
        $user = User::create([
            'name' => $registerUserData['name'],
            'email' => $registerUserData['email'],
            'password' => Hash::make($registerUserData['password']),
            'username' => $registerUserData['username'],
        ]);

        return response()->json([
            'message' => 'User Created ',
        ]);
    }

    /**
     * User List Show
     *
     * Kullanıcı bilgilerini çekmektedir.
     *
     */
    public function show(string $id)
    {
        return $user = $this->userRepository->show($id);
    }

    public function edit(string $id)
    {
        // Get the user for editing using UserRepository
        // Return view with the user data
    }

    /**
     * User Update
     *
     * Kullanıcı bilgilerini güncellemektedir.
     *
     */
    public function update(Request $request, string $id)
    {
        return $this->userRepository->update($id, $request->all());
    }

    /**
     * User Delete
     *
     * Kullanıcıyı silmektedir.
     *
     */
    public function destroy(string $id)
    {
        return $this->userRepository->destroy($id);
    }

    public function a()
    {
        dd("a");
    }
}

<?php

namespace App\Http\Controllers;

//use vendor depedency here
use Illuminate\Http\Request;

//use repository here
use App\Repositories\Repository;

//use service here
use App\Services\AuthService;

//use model here
use App\Admin;
use App\User;

class MultiAuthController extends Controller
{
    protected $userRepo;
    protected $adminRepo;

    /**
     * Injecting model depedency to repository class
     * 
     * @param App\Model $model
     * 
     * @return void
    */
    public function __construct(User $user, Admin $admin){
        $this->userRepo = new Repository($user);
        $this->adminRepo = new Repository($admin);
    }

    /**
     * Register
     * 
     * @param Illuminate\Http\Request $request
     * @param App\Model $model
     * 
     * @return mixed
    */
    public function loginUser(Request $request, AuthService $authService){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
            ]);
        
        $findUser = $this->userRepo->condition([['email',$request->email]],true);
        return $authService->checkPassword($findUser, $request->password);     
    }

    public function loginAdmin(Request $request, AuthService $authService){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
            ]);

            $findUser = $this->adminRepo->condition([['email',$request->email]],true);
            return $authService->checkPassword($findUser, $request->password);     
    }
}

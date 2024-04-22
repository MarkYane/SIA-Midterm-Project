<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Services\User1Service;

Class User1Controller extends Controller {
    use ApiResponser;
    private $request;

    public $user1Service;

    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }

    //GET USERS

    public function getUsers(){
    $users = User::all();
    return response()->json($users, 200);
    }

    //INDEXING

    public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1()); 
    }

    //ADD USERS 

    public function add(Request $request ){
        return $this->successResponse($this->user1Service->createUser1($request->all(), Response::HTTP_CREATED));
    }

    //SHOW ID

    public function show($id)
    {
        return $this->successResponse($this->user1Service->obtainUser1($id));
    }

    //UPDATE USER

    public function update(Request $request,$id)
    {
    return $this->successResponse($this->user1Service->editUser1($request->all(), $id));
    }

    //DELETE USER

    public function delete($id)
    {
        return $this->successResponse($this->user1Service->deleteUser1($id));
    }
}
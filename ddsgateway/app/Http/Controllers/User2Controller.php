<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;
    private $request;

    public $user2Service;

    public function __construct(User2Service $user2Service){
       $this->user2Service = $user2Service;
   }

    //GET USERS

    public function getUsers(){
        $users = User::all();
        return response()->json($users, 200);
    }

    //INDEXING

    public function index()
    {
        return $this->successResponse($this->user2Service->obtainUsers2()); 
    }

    //ADD USERS 

    public function add(Request $request ){
        return $this->successResponse($this->user2Service->createUser2($request->all(), Response::HTTP_CREATED));
    }

    //SHOW ID

    public function show($id)
    {
        return $this->successResponse($this->user2Service->obtainUser2($id));
    }

    //UPDATE USER

    public function update(Request $request,$id)
    {
    return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
    }

    //DELETE USER

    public function delete($id)
    {
        return $this->successResponse($this->user2Service->deleteUser2($id));
    }
}
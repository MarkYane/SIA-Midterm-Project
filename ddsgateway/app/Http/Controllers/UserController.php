<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;

Class UserController extends Controller {
    use ApiResponser;
    private $request;
    public function __construct(Request $request){
    $this->request = $request;
    }

    //GET USERS

    public function getUsers(){

    }

    //INDEXING

    public function index()
    {
   
    }

    //ADD USERS 

    public function add(Request $request ){
    
    }

    //SHOW ID

    public function show($id)
    {
    
    }

    //UPDATE USER

    public function update(Request $request,$id)
    {
    
    }

    //DELETE USER

    public function delete($id)
    {
   
    }
}
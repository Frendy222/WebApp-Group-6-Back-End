<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class userController extends Controller
{
    //contruct for the middleware and make the role admin as the sole role needed to access the api, except the store api
    public function __construct()
    {
        $this->middleware('role:admin', ['except' => ['store', 'update']]);

    }

    // to show all the data in the table user
    public function index(){
        $data = User::all();

        return response()->json($data);
    }

    // to show tha data where the user id is int the parameter  
    public function show($id){
        $data = User::find($id);

        return response()->json($data);
    }

    // to store new row into the database
    // test
    public function store(Request $request){
        $data = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'role_id' => 2,
            'exp' => 0,
            'level' => 1,
        ];
        User::create($data);

        return response()->json([
            'message' => 'Created data success'
        ]);

    }

    // to update the current data in the database
    public function update(Request $request, $id){
        $data = User::find($id);

        $updatedData = $request->toArray();

        $data = fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);
    
    }

    // to destroy the row data in the database
    public function destroy($id){
        $data = User::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }

}

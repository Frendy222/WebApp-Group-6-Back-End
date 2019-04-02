<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:admin', ['except' => ['store']]);

    }

    public function index(){
        $data = User::all();

        return response()->json($data);
    }

    public function show($id){
        $data = User::find($id);

        return response()->json($data);
    }

    public function store(UserStoreRequest $request){
        $data = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'smoke_status' => $request->get('smoke_status'),
            'role_id' => 2,
            'exp' => 0,
            'level' => 1,
        ];
        User::create($data);

        return response()->json([
            'message' => 'Created data success'
        ]);

    }

    public function update(Request $request, $id){
        $data = User::find($id);

        $updatedData = $request->toArray();

        $data = fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);
    
    }

    public function destroy($id){
        $data = User::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }

}

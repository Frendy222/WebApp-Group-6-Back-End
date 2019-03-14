<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index(){
        $data = User::all();

        return response()->json($data);
    }

    public function show($id){
        $data = User::find($id);

        return response()->json($data);
    }

    public function store(Request $request){
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'smoke_status' => $request->get('smoke_status'),
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

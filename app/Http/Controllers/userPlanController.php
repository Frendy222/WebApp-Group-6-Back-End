<?php

namespace App\Http\Controllers;

use App\UserPlan;
use Illuminate\Http\Request;

class userPlanController extends Controller
{
    //
    public function index(){
        $data = UserPlan::all();

        return response()->json($data);
    }

    public function show($id){
        $data = UserPlan::find($id);

        return response()->json($data);
    }

    public function store(Request $request){
        $data = [
            'user_id' => $request -> get('user_id'),
            'plan_id' => $request -> get('plan_id'),
            'status' => 'ongoing',
        ];
        UserPlan::create($data);

        return response()->json([
            'message' => 'Created data success'
        ]);

    }

    public function update(Request $request, $id){
        $data = UserPlan::find($id);

        $updatedData = $request->toArray();

        $data = fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);
    
    }

    public function destroy($id){
        $data = UserPlan::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }
}

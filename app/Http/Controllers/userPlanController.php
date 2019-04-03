<?php

namespace App\Http\Controllers;

use App\UserPlan;
use App\User;
use Illuminate\Http\Request;

class userPlanController extends Controller
{
    //to show all the data in the table
    public function index(){
        $data = UserPlan::all();

        return response()->json($data);
    }

    //make the show api to show where the user id one
    public function show($id){
        $data = UserPlan::where('user_id', '=', $id)
                            ->where('notif_status', "=", 1)
                            ->get();

        return response()->json($data);
    }

    // to make new row api function
    public function store(Request $request){
        // the data needed to make the new row
        $data = [
            'user_id' => $request -> get('user_id'),
            'plan_id' => $request -> get('plan_id'),
            'status' => 'ongoing',
            'date' => $request -> get('date'),
            'notif_status' => $request -> get('notif_status'),
        ];
        UserPlan::create($data);

        // response if the api is success
        return response()->json([
            'message' => 'Created data success'
        ]);

    }

    // updata funtion
    public function update(Request $request, $id){
        $data = UserPlan::find($id);

        $updatedData = $request->toArray();

        $data = fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);
    
    }

    // to delete the data in database/ 1 row int the table
    public function destroy($id){
        $data = UserPlan::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }
}

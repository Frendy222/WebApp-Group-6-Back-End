<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class planController extends Controller
{
    // to show all data in the table 
    public function index(){
        $data = Plan::all();

        return response()->json($data);
    }

    // to show the data bases on the id 
    public function show($id){
        $data = Plan::find($id);

        return response()->json($data);
    }
    
    // to store or make new data into the databases
    public function store(Request $request){
        $data = [
            'type' => $request->get('type'),
            'reward_exp' => $request->get('reward_exp'),
            'plan_description' => $request->get('plan_description'),
        ];
        Plan::create($data);

        return response()->json([
            'message' => 'Create data success'
        ]);
    }

    // to make an uptade on the current data in the table bases on the id in the parameter
    public function update(Request $request, $id){
        $data = Plan::find($id);

        $updatedData = $request->toArray();

        $data->fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);

    }

    // to destroy the data in the table base on the parameter idd
    public function destroy($id){
        $data = Plan::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }
}

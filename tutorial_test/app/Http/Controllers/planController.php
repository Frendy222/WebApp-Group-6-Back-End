<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class planController extends Controller
{
    public function index(){
        $data = Plan::all();

        return response()->json($data);
    }

    public function show($id){
        $data = Plan::find($id);

        return response()->json($data);
    }
    
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

    public function update(Request $request, $id){
        $data = Plan::find($id);

        $updatedData = $request->toArray();

        $data->fill($updatedData);
        $data->save();

        return response()->json([
            'message' => 'Update data success'
        ]);

    }

    public function destroy($id){
        $data = Plan::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete data success'
        ]);
    }
}

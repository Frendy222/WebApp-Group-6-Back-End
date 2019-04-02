<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class infoController extends Controller
{
    //index for show all data
    public function index(){
        $data = Information::all();

        return response()->json($data);
    }

    // to show data where the id is in the parameter
    public function show($id){
        $data = Information::find($id);

        return response()->json($data);
    }
    
    // to create a new data in the table
    public function store(Request $request){
        $data = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'date' => $request->get('date'),
        ];

        Information::create($data);

        return response()->json([
            'message' => 'create data success'
        ]);
    }

    // to udpate the data in the current data based on the id in the paremeter
    public function update(Request $request, $id){
        $data = Information::find($id);

        $updateData = $request->toArray();

        $data->fill($updateData);
        $data->save();

        return response()->json([
            'message' => 'update data success'
        ]);
    }

    // to destory on the data bases on the parameter
    public function destroy($id){
        $data = Information::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}

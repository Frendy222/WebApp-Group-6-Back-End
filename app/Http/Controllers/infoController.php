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

    public function show($id){
        $data = Information::find($id);

        return response()->json($data);
    }

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

    public function update(Request $request, $id){
        $data = Information::find($id);

        $updateData = $request->toArray();

        $data->fill($updateData);
        $data->save();

        return response()->json([
            'message' => 'update data success'
        ]);
    }

    public function destroy($id){
        $data = Information::find($id);

        $data->delete();

        return response()->json([
            'message' => 'Delete success'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Venue;


class VenueController extends Controller{
    
    
    public function getVenues(){
        
        $venues = Venue::all();
        
        return response()->json([
            'status' => 'success',
            'data' => [
                'venues'=>$venues
            ]
        ]);
    }
    
    public function storeVenue(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name'=>'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'remark'=>'validation_error',
                'status'=>'error',
                'message'=>['error'=>$validator->errors()->all()],
            ]);
        }
        
        $venue = Venue::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => "Venue Created successfully!",
        ], 200);
        
    }
}

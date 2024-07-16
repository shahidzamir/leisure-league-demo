<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Team;
use Exception;

class TeamController extends Controller{
    
    
    public function getTeam($team_id){
        
        
        
        try {
            
            $teamData = Team::where('id', $team_id)->with("players")->first(["id", "name"]);
        
        } catch (Exception $ex) {
            
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ]);
            
        }
        
        return response()->json([
            'status' => 'success',
            'data' => [
                'team'=>$teamData
            ]
        ]);
        

    }

}

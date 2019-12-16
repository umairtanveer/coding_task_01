<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Session;
use App\Models\UserExerciseScore;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionController extends Controller
{
    public function sessionsList(){

      // eloquent relationships wrinnen in models to get data
      $data = Session::all();
      return response()->json(['result'=>$data])->setStatusCode(Response::HTTP_OK);
    }

    public function sessionsDetail($id){

      $data = array();
      $message = "success";

      // eloquent relationships wrinnen in models to get data
      $data['session'] = Session::find($id);

      if(is_null($data)){
        $message = "No result found against session id = ".$id;
      }
      if(isset($data['session']->score)){
        $data['session']->score;
      }
      return response()->json(['result'=>$data,'message'=>$message])->setStatusCode(Response::HTTP_OK);
    }

    public function latestSessionCategories(){
      $arr = array();

      // eloquent relationships wrinnen in models to get data
      $data['sessions'] = UserExerciseScore::orderBy('created_at','Desc')->take(15)->get();
      foreach ($data['sessions'] as $d) {
         $d->exercise->category->name;
      }

      return response()->json(['result'=>$data])->setStatusCode(Response::HTTP_OK);
    }
}

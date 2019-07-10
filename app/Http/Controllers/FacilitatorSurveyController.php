<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facilitatorsurvey;
use App\Http\Requests\CreateFacilitatorSurveyRequest;

class FacilitatorSurveyController extends Controller
{

  public function store(CreateFacilitatorSurveyRequest $request) // I think were the database info will be going
  {
      // $user = Survey::create($request->all()+['user_id'=>auth()->id()]);
      //
      // return redirect('/');

      dd($request->explain);
      // $this->validate($request,[
      //   'explain' => 'required'
      // ]);
   $mainUser = Facilitatorsurvey::where('user_id', auth()->id())->whereRaw('DATE(created_at) = CURRENT_DATE')->get();


  if (count($mainUser) < 1 ){ // limiting submission to once a day
        // Survey::create(['user_id' => $user]);
        Facilitatorsurvey::create($request->all()+['user_id'=>auth()->id()]);

        // // public function logout(Request $request)
        // {
        //     $this->guard()->logout();
        //
        //     $request->session()->invalidate();
        //
        //     return $this->loggedOut($request) ?: redirect('/');
        // }

        session()->flash('message','Evaluation Submitted');
        return redirect('/');
    }
    else{
      session()->flash('message','You have filled a survey today');
      return redirect()->back();
    }

    return redirect()->back();
  }
}

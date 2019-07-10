<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facilitator;
class FacilitatorsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:facilitator',['only' => 'index','edit']);
    }

    public function index()
    {
        return view('facilitator.dashboard');
    }

    public function create()
    {
        return view('facilitator.auth.register');
    }

    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'email'         => 'required',
          'password'      => 'required',
          'phone_number'  => 'required',
          'course_title'  => 'required',
        ]);
        // store in the database
        $facilitator = new Facilitator;
        $facilitator->name = $request->name;
        $facilitator->email = $request->email;
        $facilitator->password=bcrypt($request->password);
        $facilitator->phone_number = $request->phone_number;
        $facilitator->course_title = $request->course_title;
        $facilitator->save();
        return redirect()->route('facilitator.auth.login');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

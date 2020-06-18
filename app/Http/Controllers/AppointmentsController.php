<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Appointment;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
{
    //this will lock the destroy or delete functionality in appointment controller
  $this->middleware('auth', ['only' => [ 'destroy']]);
}


    public function index()
    {
    

    //$appointments = Appointment::all();
    $appointments = Appointment::orderBy('created_at','desc')->paginate(8);

   
    return view('appointments.index')->with('appointments', $appointments);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('appointments.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        
        'name'            => 'required|min:3',
        'title'           => 'required',
        'fee'             => 'required',
        'details'         => 'required',
        'appTime'         => 'required',
        'location'        => 'required',
        'doctor'          => 'required',
        'appMaker'        => 'required',
        'amount'          => 'required',
        
]);

$appointments = new Appointment;
        $appointments->name        = $request->input('name');
        $appointments->title       = $request->input('title');
        $appointments->fee         = $request->input('fee');
        $appointments->details     = $request->input('details');
        $appointments->appTime     = $request->input('appTime');
        $appointments->location    = $request->input('location');
        $appointments->doctor      = $request->input('doctor');
        $appointments->appMaker    = $request->input('appMaker');
        $appointments->amount      = $request->input('amount');
        
        
        $appointments->save();

    //return redirect('/appointments');
    return redirect('/appointments')->with('success', 'Created new record!');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $appointments = Appointment::findOrFail($id);

        return view('appointments.show')->with('appointments', $appointments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    $appointments = Appointment::find($id);
    return view('appointments.edit')->with('appointments', $appointments);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $request->validate([
        'name'            => 'required|min:3',
        'title'           => 'required',
        'fee'             => 'required',
        'details'         => 'required',
        'appTime'         => 'required',
        'location'        => 'required',
        'doctor'          => 'required',
        'appMaker'        => 'required',
        'amount'          => 'required',
        ]);

        $appointments = Appointment::find($id);
        $appointments->title =  $request->input('title');
        $appointments->name = $request->input('name');
        $appointments->fee = $request->input('fee');
        $appointments->details = $request->input('details');
        $appointments->appTime = $request->input('appTime');
        $appointments->location = $request->input('location');
        $appointments->doctor = $request->input('doctor');
        $appointments->appMaker = $request->input('appMaker');
        $appointments->amount = $request->input('amount');

        $appointments->save();


    return redirect('/appointments/' . $appointments->id)->with('success', 'Record is updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointments = Appointment::find($id);
        $appointments->delete();
        return redirect('/appointments')->with('danger', 'Record is removed!');
        

    }
}

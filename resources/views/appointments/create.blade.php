@extends('layouts.app')

@section('title', ' | Create Appointment')

@section('content')


 


<section class="container" style="background-color: #fff">

     <div class="row">
       <div class="col-md-10 col-xs-12">
            <div class="title">
          <h2 class="text-center text-primary">Make New Appointment</h2>
        <a href="/appointments" class="btn btn-outline-success btn-sm" style="float: right; margin-bottom: 20px;">All Appointments</a>
        </div>
        
    
     <form action="/appointments" method="POST" autocomplete="on">
          <table class="table table-bordered">
         
                  <input type="hidden" value="{{csrf_token()}}" name="_token" />
                  <tr>
                    <td><b>Patient Full Name</b></td>
                    <td>
                      <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}">
                       <span class="text-danger">{{$errors->first('name') }}</span>
                    </td>
                </tr>

                <tr>
                    <td><b>Appointment Title</b></td>
                    <td>
                      <input type="text" class="form-control" name="title" placeholder="Appointment title" value="{{old('title')}}">
                       <span class="text-danger">{{$errors->first('title')}}</span>
                    </td>
                </tr>

                 <tr>
                    <td><b>Fees Due</b></td>
                    <td>
                      <input type="text" class="form-control" name="fee" placeholder="Fees Due" value="{{old('fee')}}">
                      <span class="text-danger">{{$errors->first('fee')}}</span>
                    </td>
                </tr>


               <tr>
                    <td><b>Is amound Paid?</b></td>
                    <td>
                      <input type="text" class="form-control" name="amount" placeholder="Is amount Paid?" value="{{old('amount')}}">
                      <span class="text-danger">{{$errors->first('amount')}}</span>
                    </td>
                </tr>



                  <tr>
                    <td><b>Details</b></td>
                    <td>
                      <input type="text" class="form-control" name="details" placeholder="Details" value="{{old('details')}}">
                      <span class="text-danger">{{$errors->first('details')}}</span>

                    </td>
                </tr>
                <tr>
                    <td><b>Appointment Time</b></td>
                    <td>
                      <input type="text" class="form-control" name="appTime" placeholder="Appointment Time" value="{{old('appTime')}}">
                   <span class="text-danger">{{$errors->first('appTime', 'Appointment time is required.')}}</span>

                    </td>
                </tr>

                <tr>
                    <td><b>Location</b></td>
                    <td>
                      <input type="text" class="form-control" name="location" placeholder="Location" value="{{old('location')}}">
                      <span class="text-danger">{{$errors->first('location')}}</span>
                    </td>
                </tr>
                <tr>
                    <td><b>Doctor Name</b></td>
                    <td>
                      <input type="text" class="form-control" name="doctor" placeholder="Doctor Name" value="{{old('doctor')}}">
                      <span class="text-danger">{{$errors->first('doctor')}}</span>
                    </td>
                </tr>


                <tr>
                    <td><b>Appointment Scheduler</b></td>
                    <td>
                      <input type="text" class="form-control" name="appMaker" placeholder="Appointment Scheduler" value="{{old('appMaker')}}">
                      <span class="text-danger">{{$errors->first('appMaker', 'Appointment scheduler\'s name is required.')}}</span>
                    </td>
              

              <tr>
                <td>Please, don't forget to save the the file!</td>
                <td>
                  <input type="submit" value="SAVE" class="btn btn-outline-success btn-block btn-lg">
                </td>
              </tr> 
              </form>

          </table>

       </div>
     </div>


 



</section>




@endsection

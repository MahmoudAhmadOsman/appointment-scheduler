@extends('layouts.app')
@section('title', ' | Edit Appointment')
@section('content')
<section class="container" style="background-color: #fff;">
  <div class="row">
    <div class="col-md-10 col-xs-12">
      <div class="title">
        <h2 class="text-center text-primary">Make New Appointment</h2>
        <a href="/appointments/{{$appointments->id}}" class="btn btn-outline-success btn-sm"
          style="float: right; margin-bottom: 20px;">Go Back</a>
      </div>
      <form action="/appointments/{{$appointments->id}}" method="POST" autocomplete="on">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <table class="table table-bordered">
          <tr>
            <td><b>Patient Full Name</b></td>
            <td>
              <input type="text" class="form-control" name="name" placeholder="Enter Full name"
                value="{{old('name') ?? $appointments->name}}">
              <span class="text-danger">{{$errors->first('name') }}</span>
            </td>
          </tr>
          <tr>
            <td><b>Appointment Title</b></td>
            <td>
              <input type="text" class="form-control" name="title" placeholder="Appointment title"
                value="{{old('title') ?? $appointments->title}}">
              <span class="text-danger">{{$errors->first('title')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Fees Due</b></td>
            <td>
              <input type="text" class="form-control" name="fee" placeholder="Fees Due"
                value="{{old('fee') ?? $appointments->fee}}">
              <span class="text-danger">{{$errors->first('fee')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Is the Amout Paid?</b></td>
            <td>
              <input type="text" class="form-control" name="amount" placeholder="Is amount paid?"
                value="{{old('amount') ?? $appointments->amount}}">
              <span class="text-danger">{{$errors->first('amount')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Details</b></td>
            <td>
              <input type="text" class="form-control" name="details" placeholder="Details"
                value="{{old('details') ?? $appointments->details}}">
              <span class="text-danger">{{$errors->first('details')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Appointment Time</b></td>
            <td>
              <input type="text" class="form-control" name="appTime" placeholder="Appointment Time"
                value="{{old('appTime') ?? $appointments->appTime}}">
              <span class="text-danger">{{$errors->first('appTime', 'Appointment time is required.')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Location</b></td>
            <td>
              <input type="text" class="form-control" name="location" placeholder="Location"
                value="{{old('location') ?? $appointments->location}}">
              <span class="text-danger">{{$errors->first('location')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Doctor Name</b></td>
            <td>
              <input type="text" class="form-control" name="doctor" placeholder="Doctor Name"
                value="{{old('doctor') ?? $appointments->doctor}}">
              <span class="text-danger">{{$errors->first('doctor')}}</span>
            </td>
          </tr>
          <tr>
            <td><b>Appointment Scheduler</b></td>
            <td>
              <input type="text" class="form-control" name="appMaker" placeholder="Appointment Scheduler"
                value="{{old('appMaker') ?? $appointments->appMaker}}">
              <span
                class="text-danger">{{$errors->first('appMaker', 'Appointment scheduler\'s name is required.')}}</span>
            </td>
          <tr>
            <td>Please, don't forget to save the the file!</td>
            <td>
              <input type="submit" value="SAVE" class="btn btn-outline-success  btn-md">
              <a href="/appointments/{{$appointments->id}}" class="btn btn-outline-danger  btn-md">Cancel</a>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</section>
@endsection
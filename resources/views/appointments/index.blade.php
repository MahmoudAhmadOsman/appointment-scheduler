@extends('layouts.app')

@section('title', ' | . {{$appointment->title}}')

@section('content')


      <h1 class="text-danger text-center">Appointment Center</h1>

   
      <section class="container" style="background-color: #fff">

        <div class="row">
            <div class="col-md-2 profile__panel">
                <div class="patient__profile">
                    <img src="http://www.writingcenter.uci.edu/wp-content/uploads/sites/28/2017/06/empty-calendar-2400px-copy.png" alt="" style="width: 120px; height: 120px;"><hr>
                       <h5>New Appointment?</h5>
                        <a href="/appointments/create" class="btn btn-outline-success btn-sm"> Create New Appointment</a>        
        </div>
   </div>
 <div class="col-md-10" >
                    
  <p class="lead">Here is the list of all patients who have an appointment today</p>
  <p class="mb-3"><b>Today's Date is: </b> <?php echo date("m/d/Y") ?> </p>
 @if(count($appointments) > 0)
       @foreach($appointments as $appointment)

                              
      <table class="table table-bordered table-hover" style="font-size: 12px">
                              <thead>
                                <tr>
                                  <th>ID #</th>
                                  <th>Appointment Type</th>
                                  <th>Patient Name</th>
                                  <th>Fees</th>
                                  <th><a href="/appointments/{{$appointment->id}}">See All Details</a></th>
                                  <th>
                                  Appointment Time
                                </th>
                                  <th>
                                      Location
                                    </th>
                                  <th>Doctor Name</th>
                                  <th>Scheduler Name</th>
                                  <th>Is Amount Paid?</th>
                                  <th>Date Scheduled</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-danger">{{$appointment->id}}</td>
                                  <td>{{$appointment->title}}</td>
                                  <td>{{$appointment->name}}</td>
                                  <td>${{$appointment->fee}}</td>
                                  <td>{{$appointment->details}}</td>
                                  <td>
                                   <i class="fa fa-clock-o" aria-hidden="true"></i> 

                                    {{$appointment->appTime}}
                                  </td>
                                  <td>
                                    
                                    {{$appointment->location}}
                                  </td>
                                  <td>{{$appointment->doctor}}</td>
                                  <td>{{$appointment->appMaker}}</td>
                                  <td>{{$appointment->amount}}</td>
                                  <td>{{$appointment->created_at->format('m-d-Y')}}</td>
                                </tr>
                                
                              </tbody>
                            </table>
                            @endforeach
                    {{ $appointments->links() }}
                  @else
                      <div class="no_appointment text-center">
                        <img src="https://www.sahilgraphics.com/wp-content/themes/shahil/assets/images/image-not-found.jpg" alt="" style="width: 15%; margin: auto;">
                        <h3 class="text-danger" style="font-size: 14px;">No Appointment found!</h3>
                        <a href="/appointments/create" class="btn btn-outline-success btn-sm" style="margin-bottom: 60px;"> Create New Appointment</a>
                      </div>
                  @endif
             </div>


                </div>
            </section>
    

<!-- ==================================
    End of the last design section
=================================== -->



@endsection

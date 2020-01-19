@extends('layouts.app')
@section('title', ' | . {{$appointment->name}}')
@section('content')

<section class="container" style="background-color: #fff; font-size: 20px;">
<a href="/appointments" class="fa fa-chevron-left btn btn-outline-info btn-sm"> Go Back</a><hr>
	<h3><i>{{$appointments->name}}</i> Account Details </h3><hr>
<div class="row">
<div class="col-md-2" style="font-size: 12px">
			<!-- Start of bs4 card	-->

			<div class="card" >
			  <img src="https://us.v-cdn.net/6022045/uploads/defaultavatar.png" alt="Patient image" style="width: 150px; height: 150px; margin: auto;" title="{{$appointments->name}}">
			  <div class="card-body">
			    <b class="card-title">Full Name:</b> {{$appointments->name}}
			    <p class="card-text">
			    	<b>Phone: </b> 802-354-4555
			    </p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><b>Primary MD: </b> {{$appointments->doctor}}</li>
			    <li class="list-group-item">
			    	<b>Email:</b> example@gmail.com
			    </li>
			    <li class="list-group-item">
					<b>Address:</b> 12 Main St. Coon Rapids, MN 55344
			    </li>
			    <li class="list-group-item">
					<b>Pharmacy:</b> Walgreen
			    </li>
			    <li class="list-group-item">
					<b>Medicine List:</b> Pha, Hye, Mnde
			    </li>
			  </ul>
			  
</div>




<!-- End of bs4 card -->
</div>



<!-- Start profile -->
 <div class="col-md-4" style="background-color: #fdfdfd; color: #000; display: none;">
        <h4 style="color: #888; font-size: 14px;">{{$appointments->name}}'s Profile</h4><hr>
        <img src="https://us.v-cdn.net/6022045/uploads/defaultavatar.png" alt="Patient image" style="width: 150px; height: 150px;" title="{{$appointments->name}}">
        <h4 style="color: #888; font-size: 12px;">Patient Name: {{$appointments->name}}</h4>
       
        <small><b> Summary:</b> {{$appointments->details}}</smaill>
        
    </div>
<!-- End profile -->



<div class="col-md-10">
		<table class="table table-bordered" style="font-size: 11px">
			<h4 class="text-danger">Appointment Details</h4>
	    <thead>
	      <tr>
	        <th>Appointment Type</th>
	        <th>Patient Full Name</th>
	        <th>Fees Charge</th>
	        <th>is the Amount Paid?</th>
	        <th>Appointment Details</th>
	        <th>With Doctor MD</th>
	        <th>Location:</th>
	        <th>Created Date:</th>
	       
	       
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
			<td>{{$appointments->title}}</td>
			<td>{{$appointments->name}}</td>
			<td>{{$appointments->amount}}</td>
			<td>${{$appointments->fee}}</td>
			<td>{{$appointments->details}}</td>
			<td>{{$appointments->doctor}}</td>
			<td>{{$appointments->location}}</td>
	        <td>{{$appointments->created_at->format('m-d-Y')}}</td>
	           
	           
	      </tr>
	      

	    </tbody>
	  </table> 


	  <!-- Start of insurance info -->
	  <table class="table" style="font-size: 11px;">
	  	<h4 class="text-danger">Insurance Infomation</h4>
	  	   <thead>
	      <tr>
	        <th>Insurance Name</th>
	        <th>Coverage Type</th>  
	      </tr>
	    </thead>

	    <tr>
	    	<td>{{$appointments->appMaker}}</td>
	    	<td>{{$appointments->name}}</td>
	    </tr>
	  </table>
	  <hr>
<!-- End of insurance info -->

	  <table class="table" style="font-size: 11px;">
	  <h4 class="text-danger">Scheduler's Details</h4>

	  	   <thead>
	      <tr>
	        <th>Scheduler's Full Name</th>
	        <th>Date Scheduled</th>  
	      </tr>
	    </thead>

	    <tr>
	    	<td>{{$appointments->appMaker}}</td>
	    	<td>{{$appointments->created_at->format('m-d-Y')}}</td>
	    </tr>
	  </table>



</div>








<div class="col-md-8">

<div style="display: none;">
	<h4 style="color: #888; font-size: 14px;">Type of Appointment: <span class="text-danger">

		{{$appointments->title}} </span></h4>

		<p><b>Patient Full Name: </b>{{$appointments->name}}</p>
		<p><b>Fees Charge:</b> ${{$appointments->fee}}</p>
		<p><b>is the Amount Paid?</b> {{$appointments->amount}}</p>
		<p><b>Appointment Details:</b> {{$appointments->details}}</p>
		
		<p><b>With Doctor MD:</b> {{$appointments->doctor}}</p>
		<p><b>Location:</b> {{$appointments->location}}</p>
		<p><i><b>Created Date:</b></i> {{$appointments->created_at->format('m-d-Y')}}</p>
</div>























	</div>


</div>

<div class="row" style="float: right;">

		<div class="col-md-5">
		 
            <a href="/appointments/{{$appointments->id}}/edit" class="fa fa-edit btn btn-outline-success btn-sm">  Edit/Change</a>

        

	</div>


	<div class="col-md-2">
		<form action="/appointments/{{$appointments->id}}" method="POST">
		{{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
         
    
		<button type="submit" class="fa fa-trash btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure, you want to delete this record?');">  Erraise/Delete</button>

	
		<!-- endcan -->
			
	</form>
	</div>
</div>


<br><br>
<hr>

<a href="/appointments" class="btn btn-dark btn-sm"><< Back</a>



</section>



@endsection

@extends('layouts.app')

@section('content')

<section  id="show_schedule" class="container" style="background-color: #fff; font-size: 20px;">
<div class="top_details">
		<a href="/appointments" class="fa fa-chevron-left btn btn-outline-info btn-sm go-back"> Go Back</a><hr>
		<h3><span class="text-success">{{$appointments->name}}</span> Account Details </h3>

		<a href="#" class="btn btn-outline-primary btn-sm float-right edit-insurance-btn">Edit Insurance</a>
</div>
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

 <li class="list-group-item">
					<a href="/appointments/{{$appointments->id}}/edit" class="btn btn-outline-success btn-sm btn-block">Edit/Change</a>



			    </li>
			    <li class="list-group-item">
			    	<form action="/appointments/{{$appointments->id}}" method="POST">
		{{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
         
    
		<button type="submit" class="btn btn-outline-danger btn-sm btn-block" onclick="return confirm('Are you sure, you want to delete this record?');">Erraise/Delete</button>

	
		<!-- endcan -->
			
	</form>
			    </li>

			  </ul>
			  
</div>




<!-- End of bs4 card -->
</div>







<div class="col-md-10">
		<table class="table table-bordered" style="font-size: 11px">
			<h4 class="text-danger">Appointment Details for <i class="text-success" >{{$appointments->name}}</i></h4>
	    <thead>
	      <tr>
	        <th>Appointment Type</th>
	        <th>Patient Full Name</th>
	        <th>Fees Charge</th>
	        <th>Amount Paid</th>
	        <th>Appointment Details</th>
	        <th>With Doctor MD</th>
	        <th>Location:</th>
	        <th>Created Date:</th>
	        <th>Modified Date:</th>
	       
	       
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
			<td>{{$appointments->title}}</td>
			<td>{{$appointments->name}}</td>
			<td>${{$appointments->fee}}</td>
			<td>${{$appointments->fee}}</td>
			<td>{{$appointments->details}}</td>
			<td>{{$appointments->doctor}}</td>
			<td>{{$appointments->location}}</td>
	        <td>{{$appointments->created_at->format('m-d-Y')}}</td>
	          <td>{{$appointments->updated_at->format('m-d-Y')}}</td>
	           
	           
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
	        <th>Insurance Number</th> 
	        <th>Insurance Issuer</th> 
	        <th>Insurance Phone #</th>   
	      </tr>
	    </thead>

	    <tr>
	    	<td>{{$appointments->appMaker}}</td>
	    	<td>{{$appointments->name}}</td>
	    	
	    	<td>154-687-6998</td>
	    	<td>BlueCare BlueShare</td>
	    	<td>1800-987-68749</td>
	   
	    </tr>
	  </table>
	  <hr>
<!-- End of insurance info -->

	  <table class="table" style="font-size: 11px;">
	  <h4 class="text-danger">Scheduler's Details</h4>

	  	   <thead>
	      <tr>
	        <th>Scheduler's Name</th>
	        <th>Date Scheduled</th>  
	      </tr>
	    </thead>

	    <tr>
	    	<td>{{$appointments->appMaker}}</td>
	    	<td>{{$appointments->created_at->format('m-d-Y')}}</td>
	    </tr>

	     


	     



	  </table>



</div>







	</div>


</div>








</section>



@endsection

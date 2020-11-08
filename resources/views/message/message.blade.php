<section class="app-created">
	@if(session()->has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> <span class="text-danger"></span>
		{{session()->get('success')}}
		<!-- customers->name's -->
	</div>
	@endif
	@if(session()->has('danger'))
	<div class="alert alert-danger" role="alert">
		<strong>Success:</strong> {{session()->get('danger')}}
	</div>
	@endif
</section>
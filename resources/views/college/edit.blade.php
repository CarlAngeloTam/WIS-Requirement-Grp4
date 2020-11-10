@extends('college.master-college')
@section('content')
<body>
	<br />
	<br />
	<div class="container">
		<h4>Edit College Department</h4>
		<br />
		<form method="POST" action="/colleges/{{ $college->id }}">
			@method('PUT')
			@csrf
			<div class="form-group">
				<strong><label for="exampleInputEmail1">Building:</label></strong>
				<br />
				<select class="custom-select" name="building">
					@foreach($buildings as $building)
						@if($building == $college->building)
							<option value="{{ $building }}" selected>{{ $building }}</option>
						@else
							<option value="{{ $building }}">{{ $building }}</option>
						@endif
					@endforeach	
				</select> 
			</div>
			<div class="form-group">
				<strong><label for="exampleInputEmail1">College Department:</label></strong>
				<input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ $college->name }}">
			</div>


			
			<button type="submit" class="btn btn-primary">Submit</button> 
		</form>
	</div>
</body>
@endsection
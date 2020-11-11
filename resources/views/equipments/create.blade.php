@extends('equipments.master-equipment')
@section('container')
<body>
	<br />
	<br />
	<div class="container">
		<h4>Create Equipments Form</h4>
		<br />
		<form method="POST" action="/equipments">
			@csrf
			<div class="form-group">
				<strong><label for="exampleInputEmail1">Facility:</label></strong>
				<br />
				<select class="custom-select" name="facility">
					@foreach($facilities as $facility)
						<option value="{{ $facility }}">{{ $facility}}</option>
					@endforeach	
				</select>
			</div>
			<div class="form-group">
				<strong><label for="exampleInputEmail1">Name of the Equipment:</label></strong>
				<input type="text" class="form-control" id="exampleInputPassword1" name="name">
			</div>
			<div class="form-group">
				<strong><label for="exampleInputEmail1">Number of Equipments:</label></strong>
				<input type="text" class="form-control" id="exampleInputPassword1" name="number_of_item">
			</div>



			
			<button type="submit" class="btn btn-primary">Submit</button> 
		</form>
	</div>
</body>
@endsection

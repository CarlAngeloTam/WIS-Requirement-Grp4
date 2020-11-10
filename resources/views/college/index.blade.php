@extends('college.master-college')
@section('content')
<body>
	<center><h3>College Departments</h3></center>
	<br />
	<br />
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>College Department</th>
				<th>Building</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $college_dept as $colleges)
			<tr>
				<td>{{ $colleges->id }} </td>
				<td>{{ $colleges->name }} </td>
				<td>{{ $colleges->building}}</td>
				<td>
					<a href="/colleges/{{ $colleges->id }}">Show</a>
					|
					<a href="/colleges/{{ $colleges->id }}/edit">Edit</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</body>
@endsection
@extends('college.master-college')
@section('content')
<body>
	<br />
	<br />
<div class="container">
	<h4>College Departments</h4>
	<h4>Name: {{ $college->name}}</h4>
	<h4>Building: {{ $college ->building }}</h4>
</div>
</body>
@endsection
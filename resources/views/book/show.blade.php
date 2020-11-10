@extends('layouts.master')

@section('container')
<h1>Library</h1>
<div class="container">
<h6><a href="/books/{{ $book->id }}/edit">Edit</a></h6>
	<table class="table">
<br>
<h5><center> {{ $book->Title }} </center></h5> <br>

<tbody>
	<thead>
			<tr>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Category</th>
				<th>Date Rented</th>
				<th>Date Due</th>
				<th>Penalty</th>
			</tr>
		</thead>

<tr>
		<td><a href="/books/{{ $book->id }}"> {{ $book->id }} </a></td>
		<td> {{ $book->Title }} </td>
		<td> {{ $book->Author }} </td>
		<td> {{ $book->Category }} </td>
		<td> {{ $book->Rent_Date }} </td>
		<td> {{ $book->Due_Date }} </td>
		<td> {{ $book->Penalty }} </td>
	</tr>
</tbody>
</table>
</div>

<form action="/" method="GET">
<h6><button class="btn" type="submit">Back</button></h6>
</form>

<form action="/books/{{ $book->id }}" method="POST"> @csrf @method('DELETE')
<h6><button class="btn" type="submit">Remove</button></h6>
</form>


@endsection

@extends('layouts.master')
@section('container')
<div class="container">
    <h4>Devices</h4>
<h5>Name of Device : {{ $device->name}}</h5>
<h5>Date Borrowed : {{ $device->date_borrowed}}</h5>
<h5>Date Returned : {{ $device->date_returned}}</h5>
<h5>Items Borrowed : {{ $device->items_borrowed}}</h5>
</div>
    
@endsection
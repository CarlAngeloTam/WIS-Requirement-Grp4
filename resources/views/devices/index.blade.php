@extends('layouts.master')
@section('container')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Date Borrowed</th>
                <th>Date Returned</th>
                <th>Items Borrowed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            <tr>
                 <td>{{ $device->id }}</td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->date_borrowed }}</td>
                <td>{{ $device->date_returned }}</td>
                <td>{{ $device->items_borrowed }}</td>
            
                <td><a href="/devices/{{ $device->id }}">Show</a></td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection
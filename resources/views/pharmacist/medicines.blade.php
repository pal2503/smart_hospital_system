@extends('layouts.app')

@section('content')

<h2>Medicines</h2>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    @foreach($medicines as $medicine)
    <tr>
        <td>{{ $medicine->name }}</td>
        <td>{{ $medicine->quantity }}</td>
        <td>{{ $medicine->price }}</td>
    </tr>
    @endforeach

</table>

@endsection
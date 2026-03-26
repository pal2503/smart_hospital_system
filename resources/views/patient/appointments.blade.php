@extends('layouts.app')

@section('content')

<h2>Book Appointment</h2>

<form method="POST" action="">
    @csrf

    <label>Select Doctor</label>
    <select name="doctor_id" class="form-control">
        @foreach(\App\Models\User::where('role','doctor')->get() as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
        @endforeach
    </select>

    <label>Date</label>
    <input type="date" name="date" class="form-control">

    <label>Time</label>
    <input type="time" name="time" class="form-control">

    <button class="btn btn-success mt-2">Book</button>

</form>

@endsection
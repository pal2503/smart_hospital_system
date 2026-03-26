@extends('layouts.app')

@section('content')

<h2>Doctor Dashboard</h2>

<div class="card p-3">
    <h4>Your Appointments</h4>
    <p>{{ \App\Models\Appointment::count() }}</p>
</div>

@endsection
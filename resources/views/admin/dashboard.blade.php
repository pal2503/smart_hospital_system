@extends('layouts.app')

@section('content')

<h2>Admin Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card p-3 bg-primary text-white">
            <h4>Total Doctors</h4>
            <p>{{ \App\Models\User::where('role','doctor')->count() }}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 bg-success text-white">
            <h4>Total Patients</h4>
            <p>{{ \App\Models\User::where('role','patient')->count() }}</p>
        </div>
    </div>
</div>

@endsection
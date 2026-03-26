<div class="sidebar">
    <h3>Hospital</h3>

    @if(auth()->user()->role == 'admin')
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/doctors">Doctors</a>
        <a href="/admin/patients">Patients</a>
    @endif

    @if(auth()->user()->role == 'doctor')
        <a href="/doctor/dashboard">Dashboard</a>
        <a href="/doctor/appointments">Appointments</a>
    @endif

    @if(auth()->user()->role == 'patient')
        <a href="/patient/dashboard">Dashboard</a>
        <a href="/patient/appointments">My Appointments</a>
    @endif

    @if(auth()->user()->role == 'receptionist')
        <a href="/receptionist/dashboard">Dashboard</a>
        <a href="/receptionist/patients">Patients</a>
    @endif

    @if(auth()->user()->role == 'nurse')
        <a href="/nurse/dashboard">Dashboard</a>
    @endif

    @if(auth()->user()->role == 'pharmacist')
        <a href="/pharmacist/dashboard">Dashboard</a>
        <a href="/pharmacist/medicines">Medicines</a>
    @endif

    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-danger mt-3">Logout</button>
    </form>
</div>
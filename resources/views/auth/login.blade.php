<form method="POST" action="{{ route('login') }}">
    @csrf

    <h2>Login</h2>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <!-- Role Selection -->
    <select name="role" required>
        <option value="">-- Select Role --</option>
        <option value="admin">Admin</option>
        <option value="doctor">Doctor</option>
        <option value="patient">Patient</option>
        <option value="pharmacist">Pharmacist</option>
    </select><br><br>

    <button type="submit">Login</button>

    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            font-family: Arial;
            background: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 350px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1e7e34;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <div class="mt-4">
    <label>Register As</label>
   <!-- Role Selection -->
    <select name="role" required>
        <option value="">-- Select Role --</option>
        <option value="admin">Admin</option>
        <option value="doctor">Doctor</option>
        <option value="patient">Patient</option>
        <option value="pharmacist">Pharmacist</option>
    </select><br><br>
    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Full Name" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="email" name="email" placeholder="Email" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="password" name="password" placeholder="Password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">Register</button>
    </form>

    <div class="link">
        <a href="/login">Already have an account? Login</a>
    </div>
</div>

</body>
</html>
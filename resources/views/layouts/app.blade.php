<!DOCTYPE html>
<html>
<head>
    <title>Smart Hospital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #34495e;
        }
        .content {
            width: 100%;
            padding: 20px;
        }
        .navbar {
            background: #3498db;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    @include('partials.sidebar')

    <div class="content">

        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Page Content -->
        @yield('content')

    </div>

</body>
</html>
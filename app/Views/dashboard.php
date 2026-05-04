<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        <p>Welcome back, <?= session()->get('email') ?></p>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
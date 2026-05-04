<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
               <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>
        <form action="/auth/login" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
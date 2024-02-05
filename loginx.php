<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="login.php" method="post">
            <label for="username">اسم المستخدم:</label>
            <input type="text" class="form-control" name="username" required>
            <br>
            <label for="password">كلمة المرور:</label>
            <input type="password" class="form-control" name="password" required>
            <br>
            <input type="submit" class="btn btn-primary" value="تسجيل الدخول">
        </form>
    </div>
</body>
</html>

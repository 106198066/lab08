<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>

<h1>Login</h1>

<form method="post" action="process.php">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <input type="hidden" name="token" value="J106198066">

    <input type="submit" value="Login">

</form>

</body>
</html>

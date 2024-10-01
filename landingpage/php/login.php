<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-info p-5 rounded" style="margin-top:width: 30vw">
        <div class="border border-warning container">
            <form method="POST" action="login.php">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" required>
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
                <button class="btn btn-primary p-2">submit</button>
            </form>
        </div>
        <a href="signup.php">É novo por aqui? Clique aqui para se registrar</a>
    </div>


    <?php
    include "config/config.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $password = md5($_POST['password']);
        $username = md5($_POST['username']);
        
        // check if user exists
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: main_page.php");
        } else{
            echo "Invalid username or password!";
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
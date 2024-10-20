<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card border-info shadow-lg rounded" style="width: 30vw;">
        <div class="card-body">
            <h4 class="card-title text-center text-info mb-4">Registrar</h4>
            <form method="POST" action="signup.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-info w-100">Registrar</button>
            </form>
        </div>
        <div class="card-footer text-center">
            <a href="login.php" class="text-info">Já tem uma conta? Conecte-se</a>
        </div>
    </div>
</div>


    <?php
    include 'config/config.php';
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $user_name = md5($_POST['username']);
        $pass_word = md5($_POST['password']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            die();
        } else {
            $email = md5($_POST['email']);

            try {

                $sql = $link->query("INSERT INTO user (username, password, email) VALUES ('$user_name', '$pass_word', '$email')");

                header('Location: ../html/index.html');

            } catch (Exception $e) {
                echo 'Message: ' . $e->getMessage() . $link->error;
            }
        }
    }


    ?>




    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
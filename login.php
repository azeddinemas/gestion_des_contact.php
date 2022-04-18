<?php
    require_once 'Users.php';
    if (isset($_POST['sub'])) {
        $compte = new User();
        $compte->Set($_POST['name'],$_POST['password'],"");
        $compte-> login();


        header("location:user.php");
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div class="mx-auto rounded-3" style="max-width: 380px; margin-top: 110px;">
        <form class="" method="POST">
            <div class="text-center mb-5">
                <h2>log-in</h2>
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">User name</label>
                <input type="text" name="name" class="form-control" id="exampleDropdownFormEmail1" placeholder="Entre votre nom">
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">Remember me</label>
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" class="btn text-white" name="sub" value="Sign in" style="background-color: #6C63FF;">
            </div>
        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="signup.php">New around here? Sign up</a>
        <a class="dropdown-item" href="#">Forgot password?</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div class="mx-auto rounded-3" style="max-width: 380px; margin-top: 110px;">
        <form method="POST" class="needs-validation" novalidate>
            <div class="text-center mb-5">
                <h2>log-in</h2>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">User name</label>
                <input type="text" name="name" class="form-control" id="" value="<?= $_COOKIE['name'] ?? '' ?>" placeholder="Entre votre nom" required pattern="^\w{3,}$">
                <span class="invalid-feedback">Please choose a name.</span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="" value="<?= $_COOKIE['ps'] ?? '' ?>" placeholder="Entre votre Password" required pattern="^.{6,}$">
                <span class="invalid-feedback">Please choose a password.</span>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="dropdownCheck">
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
    <script src="script.js"></script>

</body>

</html>
<?php
    require_once 'Users.php';
    if (isset($_POST['sub'])) {
        $compte = new User();
        $compte->Set($_POST['name'],$_POST['password'],"");
        $res=$compte->login();
        if($res->num_rows==1){
            $sql= $res->fetch_assoc();
            $_SESSION['name']=$sql['name'];
            $_SESSION['id']=$sql['id'];
            $_SESSION['date']=$sql['date'];
            $_SESSION['datelog']=date("Y-m-d H:i:s");
            header("location:profil.php");
        }else echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'your email or password incorrect!'
                        })
                    </script>";
    }

    if (isset($_POST['remember'])) {
        $email=$_POST['name'];
        setcookie('name',$email,time()+3600,'/');
        $password=$_POST['password'];
        setcookie('ps',$password,time()+3600,'/');
    }
    
    if (isset($_GET['new'])) {
        setcookie('name','',time()-3600,'/');
        setcookie('ps','',time()-3600,'/');
        header("location:login.php");
    }
   
?>

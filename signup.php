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
    <div class="mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 380px; margin-top: 90px; border-radius: 6px;">
        <form method="POST" class="needs-validation" novalidate>
            <div class="text-center mb-5">
                <h2>Sign up</h2>
            </div>
            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" name ="name" class="form-control" placeholder="Entre votre nom" required pattern="^\w{3,}$">
                <span class="invalid-feedback">Please choose a name.</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="email@example.com" required pattern="^([a-z0-9]+(@gmail.com))$">
                <span class="invalid-feedback">Please choose a email.</span>
            </div>
          
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name ="password" class="form-control" placeholder="Password" required pattern="^.{6,}$">
                <span class="invalid-feedback">Please choose a password.</span>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirme Password</label>
                <input type="password" name ="cpass" class="form-control" placeholder="Confirme Password" required pattern="^.{6,}$">
                <span class="invalid-feedback">Please choose a config password.</span>
            </div>
            <div class="d-grid">
                <input type="submit" name="submit" class="btn text-white" style="background-color: #6C63FF;" value="Sign up">
            </div>

        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="login.php">Already have an account?Login here.</a>
    </div>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<?php
    require_once('Users.php');
    $compte = new User();
    if(isset($_POST['submit'])){      
        $compte->Set($_POST['name'],$_POST['password'],$_POST['email']);
        if ($compte->getname()==0) {
            if ($_POST['password']==$_POST['cpass']) {
                $compte->signup();
                header("location:login.php?new");
            }else echo "<script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'your password incorrect !'
                            })
                        </script>";
            
        }else echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'changer your name!'
                        })
                    </script>";
    }
?>
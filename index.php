<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
        include 'header.php';
    ?>

    <div class="container-lg mt-5 shadow-lg p-3 rounded-3">
        <div class="row p-1">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <h1 style="color: #6C63FF;">Hello!</h1>
                <div class="p-1">
                    <h3>sign up to start creating your Contacts list.</h3>
                    <h3>Already have an account?</h3> 
                    <a href="login.php" class="btn text-white mt-3" style="background-color: #6C63FF;">Login here</a>
                </div>
                <hr>
            </div>
            <div class="col-lg-6 col-md-10 col-sm-12 text-center">
                <div>
                    <img width="80%" src="img/undraw_profile_re_4a55.svg" alt="" id="img">
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
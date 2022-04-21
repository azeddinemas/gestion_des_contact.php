<?php
    include('session.php');   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>

<body>
    <header class="d-flex justify-content-between shadow-lg p-2 rounded" style="color: #6C63FF;">
        <h2 class="text-nowrap"><i class="bi bi-file-person-fill"></i>&nbsp;<span>Contacts</span></h2>
        <input class="d-none" type="checkbox" name="" id="toggel">
        <nav class="d-flex" id="list">
            <a class="nav-link text-dark" href="#"><?= $_SESSION['name'];?></a>
            <a class="nav-link text-dark" href="contactlist.php">Contacts</a>
            <a class="nav-link text-dark" href="logout.php">Logout</a>
        </nav>
        <div id="label">
            <label for="toggel" style="cursor: pointer;"><i class="bi bi-list fs-1"></i></label>
        </div>
    </header>
    <div class="container-fluid mt-5">
        <h1>Welcome, <?= $_SESSION['name'];?> !</h1>
        <div class="row p-1">
            <hr>
            <h2>Your profile :</h2>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="p-1 text-white" style="background-color: cornflowerblue; border-radius: 10px;">
                    <hr>
                    <h4>username : <span> <?= $_SESSION['name'];?></span></h4>
                    <hr>
                    <h4>Signup date : <span><?= $_SESSION['date'];?></span></h4>
                    <hr>
                    <h4>Last login : <span><?=  $_SESSION['datelog'];?></span></h4>
                    <hr>
                </div>
                <hr>
            </div>
            <div class="col-lg-6 col-md col-sm-12 text-center">
                <div>
                    <img class="w-75" src="img/undraw_updated_resume_re_q1or.svg" alt="">
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
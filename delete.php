<?php
    require_once 'Contact.php';
    $foo=new Contact();
    if (isset($_GET['del'])) {
        
        $foo->setId($_GET['del']);
        $foo->delete();
        header("location:contactlist.php");
    }

    if (isset($_GET['id'])) {
        $foo->setId($_GET['id']);
        $update=$foo->Selectone();
  
        if(isset($_POST['submit'])){
            $foo->set($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_GET['id']);
            $foo->update();
            header('location:contactlist.php');
            
        }
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
</head>
<body>
    <main class="w-75 mx-auto mt-5"> 
        <form method="POST" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $update['name'] ;?>" name="name" class="form-control mt-2" placeholder="Enter name" required pattern="^[a-zA-Z]{3,20}$">
                    <div class="invalid-feedback">Please choose a name.</div>
                </div>
                <div class="col-6 mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control mt-2" value="<?php echo $update['phone'] ;?>" placeholder="Enter your phone" required pattern="^+{0,1}((212)|(0[6589]))\d{8}$">
                </div>
                <div class="col-12 mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control mt-2" value="<?php echo $update['email'] ;?>" placeholder="Enter your email" id="" required>
                    <div class="invalid-feedback">Please choose an email.</div>
                </div>
                <div class="col-12 mb-3">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control mt-2" value="<?php echo $update['address'] ;?>" placeholder="Enter your Address" id="" required>
                    <div class="invalid-feedback">Please choose an address.</div>
                </div>
                <div class="">
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </div>
            </div>
        </form>
    </main>
</body>
</html>
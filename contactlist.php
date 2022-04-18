<!--  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <!--================================================start Modal =======================================================================-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD NEW CONTACT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="col mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" />
                        </div>
                        <div class="col mb-3">
                            <label for="">Phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Enter password" />
                        </div>
                        <div class="col mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" id="">
                        </div>
                        <div class="col mb-3">
                            <label for="">Address</label>
                            <!-- <textarea name="address" id="" class="form-control" cols="30"  placeholder="Enter Address" rows="10"></textarea> -->
                            <input type="text" name="address" class="form-control" placeholder="Enter Address" id="">
                        </div>
                        <div class="d-grid">
                            <input type="submit" class="btn btn-primary" name="submit" value="Save">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--================================================================= end modal ===================================================================-->

    <header class="d-flex justify-content-between shadow-lg p-2 rounded" style="color: #6C63FF;">
        <h2 class="text-nowrap"><i class="bi bi-file-person-fill"></i>&nbsp;<span>Contacts</span></h2>
        <input class="d-none" type="checkbox" name="" id="toggel">
        <nav class="d-flex" id="list">
            <a class="nav-link text-dark" href="">Home</a>
            <a class="nav-link text-dark" href="">Contacts</a>
            <a class="nav-link text-dark" href="">Logout</a>
        </nav>
        <div id="label">
            <label for="toggel" style="cursor: pointer;"><i class="bi bi-list fs-1"></i></label>
        </div>
    </header>

    <h3>user</h3>
    <div class="container-lg">
        <div class="row mt-4">
            <div class="col-md d-flex justify-content-between">
                <div class="">
                    <h3>Contacts List</h3>
                </div>
                <div class="">
                    <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #6C63FF;">ADD NEW CONTACT</button>
                </div>
            </div>
        </div>
        <hr>
        <div style="overflow-x: auto;">
            <table class="table table-hover">
                <tbody class="">
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

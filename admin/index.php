<?php 
include('../functions/db.php');
include('../functions/general.php');

if (isset($_POST['username']) AND ($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = result("SELECT * FROM user WHERE username='$username';");
    if (mysqli_num_rows($query)== 0){
    }else {
        while($item=mysqli_fetch_array($query)){
            $id_user = $item['id_user'];
            $dbUser = $item['username'];
            $dbPw = $item['password'];
        }
        
        if(($username == $dbUser) AND ($password == $dbPw)){
            session_start();
            $_SESSION['id_user'] = $id_user;
            echo "
            <script type='text/javascript'>location.href = 'dashboard/';</script>
            ";
        }else{
        }
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../view/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../view/admin/css/adminlte.min.css">
    <title>Admin</title>
    <style>
    body {
        background-color: #eee;
    }
    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        vertical-align: middle;
        
    }

    .card {
        width: 400px;
        padding: 20px;
        border: none;
        /* height: 100%;
        display: flex;
        justify-content: center;
        align-items: center; */
    }

    .account {
        font-weight: 500;
        font-size: 17px
    }

    .contact {
        font-size: 13px
    }

    .form-control {
        text-indent: 14px
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #4a148c;
        outline: 0;
        box-shadow: none
    }

    .inputbox {
        margin-bottom: 10px;
        position: relative
    }

    .inputbox i {
        position: absolute;
        left: 8px;
        top: 12px;
        color: #dadada
    }

    .form-check-label {
        font-size: 13px
    }

    .form-check-input {
        width: 14px;
        height: 15px;
        margin-top: 5px
    }

    .forgot {
        font-size: 14px;
        text-decoration: none;
        color: #4A148C
    }

    .mail {
        color: #4a148c;
        text-decoration: none
    }

    .form-check {
        cursor: pointer
    }

    .btn-primary {
        color: #fff;
        background-color: #4A148C;
        border-color: #4A148C
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" >
            <form action="index.php" method="POST">
                <div class="text-center intro"> <img src="https://i.imgur.com/uNiv4bD.png" width="160"> <span class="d-block account"></span> </div>
                <div class="mt-4 text-center">
                    <h4>Log In.</h4> <span>Login with your admin credentials</span>
                    <div class="mt-3 inputbox"> <input type="text" class="form-control" name="username" placeholder="Username" required> <i class="fa fa-user"></i> </div>
                    <div class="inputbox"> <input type="password" class="form-control" name="password" placeholder="Password" required> <i class="fa fa-lock"></i> </div>
                </div>
                <!-- <div class="d-flex justify-content-between">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Keep me Logged in </label> </div>
                </div> -->
                <div class="mt-2"> <button class="btn btn-primary btn-block">Log In</button> </div>
                <?php 
                if(isset($_GET['failed'])){ ?>
                    <br>
                    <div class='alert alert-success alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <?= $_GET['failed'] ?>
                    </div>                   
                <?php } ?>
            </form>
        </div>
    </div>

    <script src="../view/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../view/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../view/admin/js/adminlte.min.js"></script>
</body>
</html>









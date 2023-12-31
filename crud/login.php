<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Login Form Example</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<?php
$emailerror = $passworderror = $email = $pass = '';
$valid = true;
include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $users = mysqli_query($conn,"SELECT * FROM User;");
  while($val = mysqli_fetch_assoc($users)){
    if ($val['Username'] == $_POST["username"] && $val['Password'] == $_POST["pass"] && $val['UserType'] == 'admin' ) {
        header("Location: crud_product.php");
      echo  "<script> Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )</script>";
        exit();
    }
    elseif($val['Username'] == $_POST["username"] && $val['Password'] == $_POST["pass"] && $val['UserType'] == 'user' ){

        header("Location: view_product.php");
        exit();
    }
    else {
       echo "<script> Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Check your username or password!',
          })</script>";       
    }
   
  }
   
  mysqli_close($conn);
}

 ?>


<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-form">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <h1>Login</h1>
                        <div class="content">
                            <div class="input-field">
                                <input type="text" name="username" value="<?php echo $email; ?>" placeholder="Username">
                                <small name="emailerror">
                                    <?php echo $emailerror; ?>
                                </small>
                            </div>
                            <div class="input-field">
                                <input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                                <small name="passworderror">
                                    <?php echo $passworderror; ?>
                                </small>
                            </div>
                            <a href="#" class="link">Forgot Your Password?</a>
                        </div>
                        <div class="action">
                            <button type="submit" name="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<?php
// if ($_SERVER['REQUEST_METHOD'] == "POST") {
 
 //     if (empty($_POST["email"])) {
 //         $emailerror = "Email is required";
 //         $valid = false;
 //     } else {
 //         $email = test_input1($_POST["email"]);
 
 //         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 //             $emailerror = "Invalid email format";
 //             $valid = false;
 //         }
 //     }
 //     if (empty($_POST["pass"])) {
 //         $passworderror = "Password is required";
 //     } else {
 //         $pass = test_input1($_POST["pass"]);
 //         if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@$!%*?&])[A-Za-zd$@$!%*?&].{6,}$/", $pass)) {
 //             $passworderror = "Password must be 6 char long,1 number,symbol,Uppercase";
 //             $valid = false;
 //         }
 //     }
 // }
 // function test_input1($data)
 // {
 //     $data = trim($data);
 //     $data = stripslashes($data);
 //     $data = htmlspecialchars($data);
 //     return $data;
 // }
 ?>
<?php
$email = $password = $emailerror = $passworderror = '';
$valid = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $emailerror = 'Required';
        $valid = false;
    } else {
        $email = test($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = 'Enter a proper email';
            $valid = false;
        }
    }

    if(empty($_POST['password'])){
        $passworderror = 'Required';
        $valid = false;
    }
    else{
        $password = test($_POST['password']);
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@$!%*?&])[A-Za-zd$@$!%*?&].{6,}$/",$password)){
          $passworderror = "Password must be 6 char long,1 number,symbol,Uppercase";
          $valid = false;
        }
    }
}

function test($data)
{
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- Signup Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    small{
        color: red;
    }
</style>
<body>

</body>
</html>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">


<!-- Email -->
<label for="Email">Email</label>
<input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
<br>
<small  name="emailerror">
    <?php echo $emailerror; ?>
</small>
<br><br>


<!-- Password -->
<label for="password">Password</label>
<input type="password" name="password" value="<?php echo $password; ?>" id="password" placeholder="********">
<br>
<small name="passworderror">
    <?php echo $passworderror; ?>
</small>
<br><br>

<input type="submit" name="submit"></input>

</form>

<?php

if ($valid == true) {
    
    echo "<h1>Welcome ",$email, "</h1>";
    echo $email, "<br>";
    echo $password, "<br>";
    
}


?>
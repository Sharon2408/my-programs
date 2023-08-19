<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
    if (isset($_POST['submit'])) {  
        $email=$_POST["email"];    
        echo "Welcome, $email" . "<br />"; ?> 
        Your email password is: <?php echo $_POST["password"]; 
        }
    else
        echo "Not Set";
        ?> 
       
</body>
</html>
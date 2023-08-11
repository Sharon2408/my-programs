<?php
$nameerror = $emailerror = $passworderror = $dateerror = $gendererror = $country_error = '';
$name = $email = $pass = $dob = $gender = $country = '';
$valid = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['name'])) {
        $nameerror = "Name is required";
        $valid = false;
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameerror = "Only alphabets are allowed";
            $valid = false;
        }
    }

    if (empty($_POST["email"])) {
        $emailerror = "Email is required";
        $valid = false;
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
            $valid = false;
        }
    }

    if (empty($_POST["password"])) {
        $passworderror = "Password is required";
    } else {
        $pass = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@$!%*?&])[A-Za-zd$@$!%*?&].{6,}$/", $pass)) {
            $passworderror = "Password must be 6 char long,1 number,symbol,Uppercase";
            $valid = false;
        }
    }
    if (empty($_POST["date"])) {
        $dateerror = "Date is required";
        $valid = false;
    } 
    elseif(date("m/d/Y") = $_POST["date"]){
        $dateerror = "Date should not be current date";
        $valid = false;
    }
    else {
        $dob = test_input($_POST["date"]);
    }
    if (empty($_POST["gender"])) {
        $gendererror = "Gender is required";
        $valid = false;
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if(empty($_POST["country"])){
$country_error = "Country is Required";
$valid = false;
    }
    else{
        $country = test_input($_POST['country']);
    }


}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        small {
            color: #FF0000;
        }
    </style>
</head>

<body>

</body>

</html>

<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Name -->
    <label for="Name">Name</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
    <br>
    <small name="nameerror">
        <?php echo $nameerror; ?>
    </small>
    <br><br>

    <!-- Email -->
    <label for="Email">Email</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
    <br>
    <small name="emailerror">
        <?php echo $emailerror; ?>
    </small>
    <br><br>


    <!-- Password -->
    <label for="password">Password</label>
    <input type="password" name="password" value="<?php echo $pass; ?>" id="password" placeholder="********">
    <br>
    <small name="passworderror">
        <?php echo $passworderror; ?>
    </small>
    <br><br>


    <!-- DOB -->
    <label for="DOB">DOB</label>
    <input type="date" id="date" name="date" value="<?php echo $dob; ?>" placeholder="dd/mm/yyyy">
    <br>
    <small name="dateerror">
        <?php echo $dateerror; ?>
    </small>
    <br><br>

    <!-- Gender -->

    <!-- Male -->
    <label for="Gender" class="form-label">Gender</label><br><br>
    <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male" >
    <label for="Male">Male</label>
    <br>
    <!-- female -->
    <input type="radio"  name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" >
    <label for="female">Female</label>
    <br>
    <small name="gendererror">
        <?php echo $gendererror; ?>
    </small>
    <br><br>


    <!-- Select Country -->
    <label for="country">Country</label>
    <select id="country" name="country" value="<?php echo $country ?>">
        <option value="">Select a country</option>
        <option value="usa">USA</option>
        <option value="canada">Canada</option>
        <option value="uk">UK</option>
    </select>
    <br>
    <small name="country_error">
        <?php echo $country_error; ?>
    </small>
    <br><br><br>


    <!-- Skills -->
    <label for="Skills" id="Skill1">Skills</label>
        <br>
        <label>
            <input type="checkbox" name="skills[]" value="HTML">
            HTML
        </label>
        <br>
        <label>
            <input type="checkbox" name="skills[]" value="CSS">
            CSS
        </label>
        <br>
        <label>
            <input type="checkbox" name="skills[]" value="JavaScript">
            JavaScript
        </label>
        <br>



    <!-- Submit Button -->
    <input type="submit" name="submit" value="submit"></input>

</form>
<?php

if ($valid == true) {
    echo "<h1>Registration DEtails</h1>";
    echo $name, "<br>";
    echo $email, "<br>";
    echo $pass, "<br>";
    echo $gender, "<br>";
    echo $country,"<br>";
    echo $dob,"<br>";
}


?>


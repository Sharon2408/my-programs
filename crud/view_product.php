<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("connect.php");

    $prod = mysqli_query($conn, "SELECT * FROM Product;");
    echo "<div class='container'>
    <div class='row d-flex'>
        ";
    while ($val = mysqli_fetch_assoc($prod)) {
        echo "<div class='col justify-content-center mt-5'>
        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='" . $val["Image"] . "' alt='Card image cap' height='300px' width='300px'>
        <div class='card-body'>
          <h5 class='card-title'>" . $val["ProductType"] . "</h5>
          <p class='card-text'>" . $val["ProductName"] . "</p>
          <button type='button'  class='btn btn-primary' data-bs-target='#collapseExample' data-bs-toggle='collapse' aria-expanded='false' aria-controls='collapseExample'>View Details</button>
          <div class='collapse' id='collapseExample'>
          <p class='card-text'>&#8377; " . $val["Price"] . "</p>
          <p class='card-text'> " . $val["Description"] . "</p>
          <p class='card-text'>Available Quantity :" . $val["Quantity"] . "</p>
          </div>
          </div>
      </div>
      </div>
      ";
    }
echo " </div></div>";
 ?>


</body>

</html>
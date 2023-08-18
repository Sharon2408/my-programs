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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include("connect.php");
    $content = mysqli_query($conn, "SELECT * FROM Product;");
    $name= $_GET['p_name'];
    $type= $_GET['p_type'];
    $desc= $_GET['p_desc'];
    $quantity= $_GET['p_quantity'];
    $price= $_GET['p_price'];
    $image= $_GET['p_image'];
    # Insert into the database
    $query = "INSERT INTO userdata(name,email) VALUES ('$name','$email')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . mysqli_error($conn);
    }
    echo "
    <div class='container'>
    <button class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' >CREATE</button>
    <br>
    <div class='row'>
        <div class='col'>
    <table class='table table-striped '>
    <thead class='text-center'>
        <tr>
             <th>ID</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>";
    while ($row = mysqli_fetch_assoc($content)) {
        echo " <tbody>
        <tr>
            <td>" . $row["ProductCode"] . "</td>
            <td>" . $row["ProductName"] . "</td>
            <td>" . $row["ProductType"] . "</td>
            <td>" . $row["Description"] . "</td>
            <td>" . $row["Quantity"] . "</td>
            <td>" . $row["Price"] . "</td>
            <td> <img src= ' " . $row["Image"] . " ' alt='image' height='100px' width='100px'> </td>
            <td><button type='button' class='btn btn-outline-success' >Edit</button></td>
            <td><button type='button' class='btn btn-outline-danger' >Delete</button></td>
        </tr>
    </tbody>";
    }
    echo "   </table>
           </div>
          </div>
        </div>";

    ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
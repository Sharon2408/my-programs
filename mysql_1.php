<?php
// $servername = "localhost:3307";
// $username = "root";
// $password = "CG-vak123";
// $dbname = "php_mysql";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // sql to create table
// $sql = "CREATE TABLE Student (
//       Roll_No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//       Stud_name VARCHAR(30) NOT NULL,
//       m1 FLOAT,
//       m2 FLOAT,
//       m3 FLOAT,
//       total FLOAT,
//       average FLOAT,
//       grade VARCHAR(30)
//       );";


// if ($conn->query($sql) === TRUE) {
//     echo "Table Student created successfully \n";
// } else {
//     echo "Error in creating table: " . $conn->error . "\n";
// }

// //Inserting the record
// $sql1 = "INSERT INTO Student ( Stud_name, m1,m2,m3)
//       VALUES ('Sharon', 87,80,90)";

// if ($conn->query($sql1) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " .  "<br>" . $conn->error;
// }

// $sql3 = "INSERT INTO Student ( Stud_name, m1,m2,m3)
// VALUES ('Thomas', 56,26,83);";

// $sql3 .= "INSERT INTO Student ( Stud_name, m1,m2,m3)
// VALUES ('Kumar', 37,70,74);";

// $sql3 .= "INSERT INTO Student ( Stud_name, m1,m2,m3)
// VALUES ('Baskar', 67,18,62);";

// if ($conn->multi_query($sql3) === TRUE) {
//     echo "Record inserted successfully \n";
// } else {
//     echo "Error in inserting record: " . $conn->error . "\n";
// }


// $sql_proc = "UPDATE Student SET total = m1+m2+m3 where Roll_No = 10;";
//  $sql_proc = "UPDATE Student SET average = total/3 where Roll_No = 10;";

// if ($conn->query($sql_proc) === TRUE) {
//     echo "Record updated successfully \n";
// } else {
//     echo "Error in updating table: " . $conn->error . "\n";
// }
// $sql4= "INSERT INTO fail_stud (Roll_No, Stud_name, grade, m1, m2, m3, total, average)
//       SELECT Roll_No, Stud_name, grade, m1, m2, m3, total, average
//       FROM student
//       WHERE m1 < 40 OR m2 < 40 OR m3 < 40;";

//        $sql4 .= "DELETE FROM student
//        WHERE m1 < 40 OR m2 < 40 OR m3 < 40";



// if ($conn->multi_query($sql4) === TRUE) {
//     echo "New records created successfully \n";
//   } else {
//     echo "Error: " . $sql4 . "<br>" . $conn->error;
//   }


// $pass = $conn->query("SELECT * FROM student");
// $fail = $conn->query("SELECT * FROM fail_stud");

// echo "<h1>Student Passed Records</h1>";
// echo "<table border='1'>
//         <tr>
//             <th>Roll_No</th>
//             <th>Student_Name</th>
//             <th>mark1</th>
//             <th>mark2</th>
//             <th>mark3</th>
//             <th>Total</th>
//             <th>Average</th>
//         </tr>";

// while ($row = $pass->fetch_assoc()) {
//     echo "<tr>
//             <td>" . $row['Roll_No'] . "</td>
//             <td>" . $row['Stud_name'] . "</td>
//             <td>" . $row['m1'] . "</td>
//             <td>" . $row['m2'] . "</td>
//             <td>" . $row['m3'] . "</td>
//             <td>" . $row['total'] . "</td>
//             <td>" . $row['average'] . "</td>
//         </tr>";
// }

// echo "</table>";

// echo "<h1>Student Failure Records</h1>";
// echo "<table border='1'>
//         <tr>
//             <th>Roll_No</th>
//             <th>Student_Name</th>
//             <th>m1</th>
//             <th>m2</th>
//             <th>m3</th>
//             <th>Total</th>
//             <th>Average</th>
//         </tr>";

// while ($row = $fail->fetch_assoc()) {
//     echo "<tr>
//             <td>" . $row['Roll_No'] . "</td>
//             <td>" . $row['Stud_name'] . "</td>
//             <td>" . $row['m1'] . "</td>
//             <td>" . $row['m2'] . "</td>
//             <td>" . $row['m3'] . "</td>
//             <td>" . $row['total'] . "</td>
//             <td>" . $row['average'] . "</td>
//         </tr>";
// }

// echo "</table>";


// $conn->close();
?>

<?php
        
//         $servername = "localhost:3307";    
//         $username = "root";
//         $password = "CG-vak123";
//         $dbname = "php_mysql";
  

  
//         $conn = mysqli_connect($servername, $username, $password, $dbname);

//         if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//         }

//         $create = "CREATE TABLE student_pdo (
//             Roll_No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             Stud_name VARCHAR(30) NOT NULL,
//             m1 FLOAT,
//             m2 FLOAT,
//             m3 FLOAT,
//             total FLOAT,
//             average FLOAT,
//             grade VARCHAR(30)
//             );";
//  if (mysqli_query($conn, $create)) {
//     echo "New table created successfully \n";
//     } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
//          // Inserting the record
//          $sql = "INSERT INTO student_pdo (Stud_name,grade,m1,m2,m3)
//          VALUES ('hari','grade 7',45,55,36);";
       
//        $sql .= "INSERT INTO student_pdo (Stud_name,grade,m1,m2,m3)
//        VALUES ('venkit','grade 8',48,60,55);";
   
//        $sql .= "INSERT INTO student_pdo (Stud_name,grade,m1,m2,m3)
//        VALUES ('Karthi','grade 9',64,54,74);";
   
//        $sql .= "INSERT INTO student_pdo (Stud_name,grade,m1,m2,m3)
//        VALUES ('Senthil','grade 10',49,67,77);";
   
//        $sql .= "INSERT INTO student_pdo (Stud_name,grade,m1,m2,m3)
//        VALUES ('Vicky','grade 11',76,36,66);";

//         if (mysqli_multi_query($conn, $sql)) {
//         echo "New record created successfully \n";
//         } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }


//        $sql_proc = "UPDATE Student_pdo SET total = m1+m2+m3;";
//          $sql_proc = "UPDATE Student_pdo SET average = total/3;";
       
//        if (mysqli_query($conn,$sql_proc) === TRUE) {
//            echo "Record updated successfully \n";
//        } else {
//            echo "Error in updating table: " . $conn->error . "\n";
//        }


// $sql4= "INSERT INTO fail_stud_pdo (Roll_No, Stud_name, grade, m1, m2, m3, total, average)
//       SELECT Roll_No, Stud_name, grade, m1, m2, m3, total, average
//       FROM student_pdo
//       WHERE m1 < 40 OR m2 < 40 OR m3 < 40;";

//        $sql4 .= "DELETE FROM student_pdo
//        WHERE m1 < 40 OR m2 < 40 OR m3 < 40;";



// if (mysqli_multi_query($conn,$sql4) === TRUE) {
//     echo "New records created successfully \n";
//   } else {
//     echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
//   }


// $pass = mysqli_query($conn,"SELECT * FROM student_pdo;");
// $fail = mysqli_query($conn,"SELECT * FROM fail_stud_pdo;");

// echo "<h1>Student Passed Records</h1>";
// echo "<table border='1'>
//         <tr>
//             <th>Roll_No</th>
//             <th>Student_Name</th>
//             <th>mark1</th>
//             <th>mark2</th>
//             <th>mark3</th>
//             <th>Total</th>
//             <th>Average</th>
//         </tr>";

// while ($row = mysqli_fetch_assoc($pass)) {
//     echo "<tr>
//             <td>" . $row['Roll_No'] . "</td>
//             <td>" . $row['Stud_name'] . "</td>
//             <td>" . $row['m1'] . "</td>
//             <td>" . $row['m2'] . "</td>
//             <td>" . $row['m3'] . "</td>
//             <td>" . $row['total'] . "</td>
//             <td>" . $row['average'] . "</td>
//         </tr>";
// }

// echo "</table>";

// echo "<h1>Student Failure Records</h1>";
// echo "<table border='1'>
//         <tr>
//             <th>Roll_No</th>
//             <th>Student_Name</th>
//             <th>m1</th>
//             <th>m2</th>
//             <th>m3</th>
//             <th>Total</th>
//             <th>Average</th>
//         </tr>";

// while ($row =  mysqli_fetch_assoc($fail)) {
//     echo "<tr>
//             <td>" . $row['Roll_No'] . "</td>
//             <td>" . $row['Stud_name'] . "</td>
//             <td>" . $row['m1'] . "</td>
//             <td>" . $row['m2'] . "</td>
//             <td>" . $row['m3'] . "</td>
//             <td>" . $row['total'] . "</td>
//             <td>" . $row['average'] . "</td>
//         </tr>";
// }

// echo "</table>";
//         mysqli_close($conn);
//     ?>

    <?php
   // Perform the same using PDO, where use :bindvariable form and ? form in prepared statement template for multiple insertion
  //  a.	Update the student name and grade of the 2nd rollno record to the user specified value by prepared statement.
  //  b.	Delete the student record by user specified rollno using prepared statement

  // $servername = "localhost:3307";    
  // $username = "root";
  // $password = "CG-vak123";
  // $dbname = "php_mysql";



  //    $conn = new mysqli($servername, $username, $password, $dbname);

  //    if ($conn->connect_error) {
  //      die("Connection failed: " . $conn->connect_error);
  //    }

  //    $stmt = $conn->prepare("INSERT INTO student_pdo (Roll_No,Stud_name,grade,m1,m2,m3)
  //    VALUES (?,?,?,?,?,?);");
  //    $stmt->bind_param( 'sssiii',$rollno, $name, $grade,$m1,$m2,$m3);


  //    $rollno = 101;
  //    $name = "Sharon";
  //    $grade = "grade12";
  //    $m1=45;
  //    $m2=56;
  //    $m3=78;
  //    $stmt->execute();

  //    $rollno = 102;
  //    $name = "Deva";
  //    $grade = "grade8";
  //    $m1=45;
  //    $m2=56;
  //    $m3=78;
  //    $stmt->execute();

  //    $rollno = 103;
  //    $name = "deepak";
  //    $grade = "grade10";
  //    $m1=45;
  //    $m2=56;
  //    $m3=78;
  //    $stmt->execute();

  //    $rollno = 104;
  //    $name = "Prem";
  //    $grade = "grade5";
  //    $m1=45;
  //    $m2=56;
  //    $m3=78;
  //    $stmt->execute();

  //    $rollno = 105;
  //    $name = "Shaik";
  //    $grade = "grade7";
  //    $m1=45;
  //    $m2=56;
  //    $m3=78;
  //    $stmt->execute();


  //    echo "New records created successfully";

  //    $stmt->close();
  //    $conn->close();
 ?>


    
<?php
    //  $servername = "localhost:3307";    
    //  $username = "root";
    //  $password = "CG-vak123";
    //  $dbname = "php_mysql";

    //     try {
    //       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
    //       $stmt = $conn->prepare("INSERT INTO student2 (Roll_No,Stud_name,grade,m1,m2,m3)
    //       VALUES (:Roll_No,:Stud_name,:grade,:m1,:m2,:m3);");
    //       $stmt->bindParam(':Roll_No', $rollno);
    //       $stmt->bindParam(':Stud_name', $name);
    //       $stmt->bindParam(':grade', $grade);
    //       $stmt->bindParam(':m1', $m1);
    //       $stmt->bindParam(':m2', $m2);
    //       $stmt->bindParam(':m3', $m3);

    //       $rollno = 106;
    //       $name = "Joseph";
    //       $grade = "grade8";
    //       $m1=45;
    //       $m2=56;
    //       $m3=78;
    //       $stmt->execute();
  
    //       $rollno = 107;
    //       $name = "Gabriel";
    //       $grade = "grade7";
    //       $m1=45;
    //       $m2=56;
    //       $m3=78;
    //       $stmt->execute();
  
    //       $rollno = 108;
    //       $name = "Lebron";
    //       $grade = "grade7";
    //       $m1=45;
    //       $m2=56;
    //       $m3=78;
    //       $stmt->execute();
  
    //       $rollno = 109;
    //       $name = "Curry";
    //       $grade = "grade7";
    //       $m1=45;
    //       $m2=56;
    //       $m3=78;
    //       $stmt->execute();
  
    //       $rollno = 110;
    //       $name = "Arun";
    //       $grade = "grade7";
    //       $m1=45;
    //       $m2=56;
    //       $m3=78;
    //       $stmt->execute();


    //       echo "New records created successfully";
    //     } catch(PDOException $e) {
    //       echo "Error: " . $e->getMessage();
    //     }
    //     $conn = null;
    ?>

    <?php 
  //   $servername = "localhost:3307";    
  //   $username = "root";
  //   $password = "CG-vak123";
  //   $dbname = "php_mysql";

  //   try{
  //   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     // $stmt = $conn->prepare("UPDATE student2 set Roll_No = :Roll_No where Roll_No = 110");
  //     $stmt = $conn->prepare("UPDATE student2 set grade = :grade where Roll_No = 1001");
  //   //  $stmt->bindParam(':Roll_No', $rollno);
  //     $stmt->bindParam(':grade', $grade);
       
  //     //$rollno = 1001;
  //     $grade = 'B';
  //     $stmt->execute();
  //     echo "Updated successfully";
  // }
  // catch(Exception $e){
  //   echo "Error: " . $e->getMessage();
  // }
  // $conn = null;
    ?>

<?php 
    $servername = "localhost:3307";    
    $username = "root";
    $password = "CG-vak123";
    $dbname = "php_mysql";

    try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("DELETE from student2  where Roll_No = :Roll_No");
      $stmt->bindParam(':Roll_No', $rollno);

       
      $rollno = 106;
      $stmt->execute();
      echo "Deleted successfully";
  }
  catch(Exception $e){
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
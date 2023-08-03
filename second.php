<?php
$Employee = array(
    "Emp_Id" => 1001,
    "Emp_name" => "Hemanth",
    "DOJ" => "10-08-2020",
    "Department" => "TECH",
    "Phone_No" => 9486208896,
    "Address" => array(
        "Door_No" => "90A",
        "Street_Name" => "John Street",
        "Town" => "Kuniamuthur",
        "City" => "Coimbatore",
        "Pincode" => 641008
    ),
    "Salary" => array(
        "Basic" => 16000,
        "DA" => 0,
        "HRA" => 0,
        "FA" => 0,
        "PF" => 0,
        "Tax" => 0,
        "Gross_Pay" => 0,
        "Net_Pay" => 0
    ),

);

foreach ((array) $Employee as $x => $val_x) {
    $Door_No = $Employee["Address"]["Door_No"];
    $Street_Name = $Employee["Address"]["Street_Name"];
    $Town = $Employee["Address"]["Town"];
    $City = $Employee["Address"]["City"];
    $Pincode = $Employee["Address"]["Pincode"];
    $Department = $Employee["Department"];
    $Basic = $Employee["Salary"]["Basic"];
    $DA = $Employee["Salary"]["DA"];
    $HRA = $Employee["Salary"]["HRA"];
    $FA = $Employee["Salary"]["FA"];
    $PF = $Employee["Salary"]["PF"];
    $Tax = $Employee["Salary"]["Tax"];
    $Gross_Pay = $Employee["Salary"]["Gross_Pay"];
    $Net_Pay = $Employee["Salary"]["Net_Pay"];
    if ($Basic > 20000 && $Department = 'HR') {
        $DA = 0.585 * $Basic;
        $HRA = 0.15 * $Basic;
        $FA = 2000;
        $PF = 0.20 * $Basic;
        $Tax = 0.17 * $Basic;
        $Gross_Pay = $Basic + $DA + $HRA + $FA;
        $Deduction = $PF + $Tax;
        $Net_Pay = $Gross_Pay - $Deduction;

    } elseif ($Basic > 15000 && $Department = 'HR') {
        $DA = 0.46 * $Basic;
        $HRA = 0.12 * $Basic;
        $FA = 2000;
        $PF = 0.15 * $Basic;
        $Tax = 0.12 * $Basic;
        $Gross_Pay = $Basic + $DA + $HRA + $FA;
        $Deduction = $PF + $Tax;
        $Net_Pay = $Gross_Pay - $Deduction;
    } elseif ($Basic > 20000 && $Department = 'TECH') {
        $DA = 0.585 * $Basic;
        $HRA = 0.15 * $Basic;
        $FA = 5000;
        $PF = 0.20 * $Basic;
        $Tax = 0.17 * $Basic;
        $Gross_Pay = $Basic + $DA + $HRA + $FA;
        $Deduction = $PF + $Tax;
        $Net_Pay = $Gross_Pay - $Deduction;
    } elseif ($Basic > 15000 && $Department = 'TECH') {
        $DA = 0.46 * $Basic;
        $HRA = 0.12 * $Basic;
        $FA = 5000;
        $PF = 0.15 * $Basic;
        $Tax = 0.12 * $Basic;
        $Gross_Pay = $Basic + $DA + $HRA + $FA;
        $Deduction = $PF + $Tax;
        $Net_Pay = $Gross_Pay - $Deduction;
    } else {
        $DA = 0.425 * $Basic;
        $HRA = 1500;
        $FA = 2000;
        $PF = 0.10 * $Basic;
        $Gross_Pay = $Basic + $DA + $HRA + $FA;
        $Deduction = $PF + $Tax;
        $Net_Pay = $Gross_Pay - $Deduction;
    }
    echo "<html>
    <body>
    <style>
    table,th,td{
    border:1px solid black;
    }
    </style>
    <table>
    <thead>
    <tr>
    <th colspan='5'>Employee</th>
    <th colspan='5'>Address</th>
    <th colspan='8'>Salary</th>
    </tr>
    <tr>
    <th>Emp_Id</th>
    <th>Emp_Name</th>
    <th>Datte_Of_Joining</th>
    <th>Department</th>
    <th>Phone_No</th>
    <th>Door_No</th>
    <th>Street_Name</th>
    <th>Town</th>
    <th>City</th>
    <th>Pincode</th>
    <th>Basic_Pay</th>
    <th>DA</th>
    <th>HRA</th>
    <th>FA</th>
    <th>PF</th>
    <th>Tax</th>
    <th>Gross_Pay</th>
    <th>Net_Pay</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>$Employee[Emp_Id]</td>
    <td>$Employee[Emp_name]</td>
    <td>$Employee[DOJ]</td>
    <td>$Employee[Department]</td>
    <td>$Employee[Phone_No]</td>
    <td>$Door_No</td>
    <td>$Street_Name</td>
    <td>$Town</td>
    <td>$City</td>
    <td>$Pincode</td>
    <td>$Basic</td>
    <td>$DA</td>
    <td>$HRA</td>
    <td>$FA</td>
    <td>$PF</td>
    <td>$Tax</td>
    <td>$Gross_Pay</td>
    <td>$Net_Pay</td>
    </tr>
    </tbody>
    </table>;
    </body>
    </html>";
    break;

}
echo "<br><br>";
echo var_dump($Employee), "<br><br>";
print_r($Employee);
echo "<br><br>";


// Do While 
$a = 1;
do {
    echo "$a<br/>";
    $a++;
} while ($a <= 10);
echo "<br><br>";

// While
echo "While Loop<br>";
$b = 1;
while ($b <= 5) {
    echo "$b <br>";
    $b++;
}

// While EndWhile
echo "<br><br>";
echo "While EndWhile<br>";
$b = 1;
while ($b <= 5):
    echo "$b <br>";
    $b++;
endwhile;

echo "<br><br>";

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 3; $j++) {
        echo "$i <br> $j";
        if ($i = $j) {
            break 2;
        }
    }

}
for ($i = 10; $i <= 15; $i++) {

    for ($j = 10; $j <= 15; $j++) {
        echo "$i <br> $j";
        if (!$i = $j) {
            continue 2;
        }
    }

}

?>

<?php
$student = array(
    array("name" => "Sharon", "m1" => 78, "m2" => 68, "m3" => 40, "average" => 0, "total" => 0),
    array("name" => "Arun", "m1" => 88, "m2" => 98, "m3" => 97, "average" => 0, "total" => 0),
    array("name" => "Hema", "m1" => 58, "m2" => 98, "m3" => 70, "average" => 0, "total" => 0)
);

foreach ($student as $x => $val_x) {

    echo $val_x['name'];


    $total = $val_x['m1'] + $val_x['m2'] + $val_x['m3'];
    $average = $total / 3;

    $student [$x]['total'] = $total;
    $student [$x]['average'] = $total;

}
echo  $student [$x]['total'];
?>
<table>
    <tr>
        <th>Name</th>
        <th>Mark 1</th>
        <th>Mark 2</th>
        <th>Mark 3</th>
        <th>Average</th>
        <th>Total</th>
    </tr>
    <?php foreach ($student as $student): ?>
        <tr>
            <td>
                <?php echo $student['name']; ?>
            </td>
            <td>
                <?php echo $student['m1']; ?>
            </td>
            <td>
                <?php echo $student['m2']; ?>
            </td>
            <td>
                <?php echo $student['m3']; ?>
            </td>
            <td>
                <?php echo $student['average']; ?>
            </td>
            <td>
                <?php echo $student['total']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Array Functions -->


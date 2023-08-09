<!-- 1st Q -->
<?php
$num = [];

for ($i = 1; $i <= 10; $i++) {
    array_push($num, rand(10, 100));
}
print_r($num);

function check_num(array $arr)
{
    try {
        foreach ($arr as $x) {
            if ($x % 10 == 0) {
                throw new Exception("The number in a array is divisible by 10");
            }
        }
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 2; $j < $arr[$i]; $j++) {
                if ($arr[$i] % $j == 0) {
                    throw new Exception("The number in a array is prime number");

                }

            }
        }
        ;
        for ($k = 0; $k < count($arr); $k++) {
            echo "The square value of elements in an array : " . pow($arr[$i], 2) .
                "<br>";
        }

    } catch (Exception $e) {
        echo "<br>The error is : " . $e->getMessage() . "<br>";
    } finally {
        echo "Exception is Handled";
    }
}
check_num($num);
?>

<!-- 2nd Q -->
<?php
class Person
{
    public $person_name;
    public $person_dob;
    public $person_gender;

    public $person_mobile;

    function __construct($name, $dob, $gender, $address, $mobile)
    {

        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->person_gender = $gender;
        $this->person_mobile = $mobile;
    }


}

class Address extends Person
{
    public $door_no;
    public $street_name;
    public $city;
    public $pin_code;

    function __construct($name, $dob, $gender, $mobile, $d_no, $street, $city, $pin)
    {

        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->person_gender = $gender;
        $this->person_mobile = $mobile;
        $this->door_no = $d_no;
        $this->street_name = $street;
        $this->city = $city;
        $this->pin_code = $pin;

    }
    function display()
    {
        echo "PERSON DETAILS" . "<br>";
        echo "Name : " . $this->person_name . "<br>";
        echo "D.O.B : " . $this->person_dob . "<br>";
        echo "Gender : " . $this->person_gender . "<br>";
        echo "Mobile : " . $this->person_mobile . "<br>";
        echo "PERSON ADDRESS : <br>";
        echo "Door_No : " . $this->door_no . "<br>";
        echo "Street_Name : " . $this->street_name . "<br>";
        echo "City : " . $this->city . "<br>";
        echo "Pin_code : " . $this->pin_code . "<br>";
        echo "<br><br><br><br><br>";
    }
}

$addr = new Address("Sharon D", "08-04-2002", "Male", "9597303632", "9/69G", "Conway Street", "New York", 641008);
$addr->display();
?>
<!-- 3rd Q -->
<?php
class User
{
    private $user_name;
    private $age;
    private $mail_id;


    function set_details($name, $age, $mail_id)
    {
        $this->user_name = $name;
        $this->age = $age;
        $this->mail_id = $mail_id;
    }



    function get_details()
    {
        try {
            if ($this->age < 18) {
                echo "<h2>User Details</h2>";
                throw new Exception("Age is less than 18");
            } else {
                echo "User Name : " . $this->user_name . "<br>";
                echo "User Age : " . $this->age . "<br>";
                echo "User Mail ID : " . $this->mail_id . "<br>";
            }
        } catch (Exception $a) {
            echo $a->getMessage()."<br><br>";
        }

    }


}

$obj = new User();

$obj->set_details("Sharon", 21, "sharonantony2408@gmail.com");
$obj->set_details("Sharon", 2, "sharonantony2408@gmail.com");
$obj->get_details();
?>

<?php
class Static_Check
{
    public static $BELOW_AGE;
    public static $ABOVE_AGE;
    public $name;
    public $age;
    function __construct()
    {

    }

    function __destruct()
    {
    }

   public static function check($name,$age)
    {
        if ($age > 50) {
        
            // echo "name : ".$name;
            // echo "age : ".$age;
            self::$ABOVE_AGE++;
        } elseif ($age < 50) {
   
            // echo "name : ".$name;
            // echo "age : ".$age;
            self::$BELOW_AGE++;
        }
    }
}


Static_Check::check("Sharon",22);
Static_Check::check("Darshan",52);
Static_Check::check("Harshan",62);
Static_Check::check("Hemanth",72);
Static_Check::check("Arun",25);

echo "Above Age 50". "<br>" .Static_Check::$ABOVE_AGE. "<br>";
echo "Below Age 50". "<br>" .Static_Check::$BELOW_AGE. "<br>";
?>


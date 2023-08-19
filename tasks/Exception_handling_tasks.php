<!-- 1st Q -->
 <?php
$num = [];

for ($i = 1; $i <= 3; $i++) {
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
            $stat=0;
            for ($j = 2; $j < $arr[$i]; $j++) {
                if ($arr[$i] % $j == 0) {
                    $stat++; 
                    break;    
                     
                }
            }
            
            if ($stat == 1){
                for ($k = 0; $k < count($arr); $k++) {
                    $val = pow($arr[$i], 2) ;
                 }
                

                }
                else{
                throw new Exception("The number in a array is prime number");
                }
            }
            echo "The square value of elements in an array : " .$val ."<br>";
        }
     catch (Exception $e) {
        echo "<br>The error is : " . $e->getMessage() . "<br>";
    } finally {
        echo "Exception is Handled"."<br>";
    }
}
check_num($num);
?> 

<!-- 2nd Q -->
<?php
class Address
{
    public $door_no;
    public $street_name;
    public $city;
    public $pin_code;

    function __construct( $d_no, $street, $city, $pin)
    {

        $this->door_no = $d_no;
        $this->street_name = $street;
        $this->city = $city;
        $this->pin_code = $pin;

    }
    function display(){
    echo "PERSON ADDRESS : <br>";
    echo "Door_No : " . $this->door_no . "<br>";
    echo "Street_Name : " . $this->street_name . "<br>";
    echo "City : " . $this->city . "<br>";
    echo "Pin_code : " . $this->pin_code . "<br>";
    echo "<br><br><br><br><br>";
    }
}
class Person
{
    public $person_name;
    public $person_dob;
    public $person_gender;

    public $person_mobile;

    public $addr;
    function __construct($name, $dob, $gender,  $mobile,$d_no, $street, $city, $pin)
    {
        $this->addr = new Address($d_no, $street, $city, $pin);
        $this->person_name = $name;
        $this->person_dob = $dob;
        $this->person_gender = $gender;
        $this->person_mobile = $mobile;
    
    }
    function display()
    {
        echo "PERSON DETAILS" . "<br>";
        echo "Name : " . $this->person_name . "<br>";
        echo "D.O.B : " . $this->person_dob . "<br>";
        echo "Gender : " . $this->person_gender . "<br>";
        echo "Mobile : " . $this->person_mobile . "<br>";
       echo $this->addr->display();
    }

}



$addr = new Person("Sharon D", "08-04-2002", "Male", "9597303632", "9/69G", "Conway Street", "New York", 641008);
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
    function __construct($name,$age)
    {
        $this->name = $name; 
        $this->age = $age;
        $this->check();
    }

    function __destruct()
    {
        echo "Destructor <br>";
    }

   public function check()
    {
        if ($this->age > 50) {
        
         
            self::$ABOVE_AGE++;
        } else{
   
          
            self::$BELOW_AGE++;
        }
    }
    public static function showResult()
{
    echo "Age above 50 = " . self::$ABOVE_AGE . "<br>";
    echo "Age below 50 = " . self::$BELOW_AGE . "<br>";
}
}

$s1 = new Static_Check ("Seeli",23);
$s2 = new Static_Check ("Sharon",21);
$s3 = new Static_Check ("John",63);
$s4 = new Static_Check ("David",59);
$s5 = new Static_Check ("Ignacious",44);

Static_Check::showResult();

?>


 <?php
 $host = "localhost"; /* Host name */
$user = "meat_mr"; /* User */
$password = "123456"; /* Password */
$dbname = "car_book"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
 
 
 $from = $_POST['from'];
 $to = $_POST['to'];
  $cartype = $_POST['cartype'];
   $pack = $_POST['pack'];
    $date = $_POST['date'];
 $fname = $_POST['fname'];
  $lname = $_POST['lname'];
   $gender = $_POST['gender'];
    $age = $_POST['age'];
  $emailaddress = $_POST['emailaddress'];
   $phonenumber = $_POST['phonenumber'];
   $crdate = date();
 
 $sql = "INSERT INTO booking_details (from_location,to_location,car_type,package_type,travel_date,firstname,lastname,gender,age,email,phone_number,cr_date)
 VALUES ('".$from."','".$to."','".$cartype."','".$pack."','".$date."','".$fname."','".$lname."','".$gender."','".$age."','".$emailaddress."','".$phonenumber."','".$crdate."')";


if(mysqli_query($con, $sql)){
     $response =  "Records inserted successfully.";
} else{
     $response =  "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
   
   
      echo $response;
   die;
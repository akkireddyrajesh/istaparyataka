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
 
 
 $source = $_REQUEST['source'];
 $destnation = $_REQUEST['destination'];
 
 $username = $_REQUEST['date'];
 $ip = $_SERVER['REMOTE_ADDR'];
 $cr_date = date("Y-m-d h:i:s");
 
 

          
   $query = "select count(*) as cntUser from booking_details where travel_date='".$username."'";

   $result = mysqli_query($con,$query);
   $response = "<span style='color: green;'>Available.</span>";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Not Available.</span>";
      }
       $sql = "INSERT INTO avalibilty_check (source,destination,date,ip_address,cr_date)VALUES ('".$source."','".$destnation."','".$username."','".$ip."','".$cr_date."')";



       $result1 =       mysqli_query($con, $sql);
   
   }

   echo $response;
   die;
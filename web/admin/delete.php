<?php
error_reporting(0);
session_start();
include "config.php";
	$uid=$_SESSION['qisadmin'];
	$type=$_GET['type'];
	$id=$_GET['id'];
	$dtype=$_GET['dtype'];
	$did=$_GET['did'];
	$str=$_SESSION['it'];
if($type=='slide')
{
	$del=mysqli_query("delete from slide where sid='$id' ");
?>
<script>

	window.location="slideshow.php?#tab_2";
</script>    
    
<?php
}


if($type=='home')
{
	$del=mysqli_query("delete from home where hid='$id' ");
?>
<script>

	window.location="homecon.php?#tab_2";
</script>    
    
<?php
}


if($type=='services')
{
	$del=mysqli_query($conn,"delete from contact where id='$id' ");
?>
<script>

	window.location="services.php?#tab_2";
</script>    
    <?php
}  
  if($type=='servicesstatus')
{
//       if($act==' ' || )
// {
    
	$del=mysqli_query($conn,"delete from contact where id='$id' ");
?>
<script>

	window.location="services.php?#tab_2";
</script>    
    

    
<?php
}
if($type=='about')
{
	$del=mysqli_query("delete from aboutcon where aid='$id' ");
?>
<script>

	window.location="about.php?#tab_2";
</script> 
<?php
}
if($type=='gallery')
{
	$del=mysqli_query($conn,"delete from booking_details where b_id='$id' ");
?>
<script>

	window.location="gallery.php?#tab_2";
</script> 
<?php
}


if($type=='course')
{
	$del=mysqli_query($conn,"delete from avalibilty_check where id='$id' ");
?>
<script>

	window.location="courses.php?#tab_2";
</script> 
<?php
}
if($type=='chairman')
{
	$del=mysqli_query("delete from chairmen where cid='$id' ");
?>
<script>

	window.location="chairmen.php?#tab_2";
</script> 
<?php }
if($type=='innovation')
{
	$del=mysqli_query("delete from innovation where iid='$id' ");
?>
<script>

	window.location="innovation.php?#tab_2";
</script> 
<?php }
?>
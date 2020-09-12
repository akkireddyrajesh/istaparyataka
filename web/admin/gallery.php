<?php
error_reporting(0);
session_start();
if(isset($_SESSION['aid'])==NULL)
{
	header("Location:index.php");
}
else
{
	include "config.php";
	$uid=$_SESSION['aid'];
	$id1=$_GET['id'];
	$_SESSION['it']=$id1;
	
	if(isset($_POST['gallery']))
{
     $host = "localhost"; /* Host name */
$user = "meat_mr"; /* User */
$password = "123456"; /* Password */
$dbname = "car_book"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
    
	
	date_default_timezone_set('Asia/Calcutta');
    $date1 = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$uploadDir = '../gallery/';

$from = $_POST['from'];
 $to = $_POST['to'];
  $cartype = $_POST['cartype'];
    $pack = $_POST['pack'];
    $date1 = $_POST['inputPassword'];
  
 $fname = $_POST['fname'];
  $lname = $_POST['lname'];
   $gender = $_POST['gender'];
    $age = $_POST['age'];
  $emailaddress = $_POST['emailaddress'];
   $phonenumber = $_POST['phonenumber'];
   $crdate = date();
 
 $sql = "INSERT INTO booking_details (from_location,to_location,car_type,package_type,travel_date,firstname,lastname,gender,age,email,phone_number,cr_date)
 VALUES ('".$from."','".$to."','".$cartype."','".$pack."','".$date1."','".$fname."','".$lname."','".$gender."','".$age."','".$emailaddress."','".$phonenumber."','".$crdate."')";






	if(mysqli_query($con, $sql))
	{
		$msg='true';
		?>
        <script>
		window.location="gallery.php?#tab_1";
		</script>
        <?php
	}
	else
	{
		$msg='false';
	}
	
	
}
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>shreeistaparyaatak | Admin</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
   <!-- END PAGE LEVEL STYLES -->   
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/portfolio.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />

  <!-- BEGIN PAGE LEVEL STYLES --> 
  
   <!-- END PAGE LEVEL STYLES --> 
   <script>
   
   function ref(str)
{
	
	
		window.location="homecon.php?#tab_2";
		


}

   
   </script>
   <script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	
</script>
<script>
function edit1()
{
	 var dat=nicEditors.findEditor('area3').getContent();
	  document.getElementById("tar").value=dat;
	 
	
	 
}
function edit2()
{
	 var dat=nicEditors.findEditor('area4').getContent();
	  document.getElementById("tar1").value=dat;
	 
	
	 
}

</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-fixed">
   <!-- BEGIN HEADER -->   
   <?php include "includes/header.php"; ?>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->   
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
       <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->  
			<?php include 'includes/sidemenu.php';?>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
        <?php include "includes/custom.php"; ?>
         <!-- END BEGIN STYLE CUSTOMIZER -->           
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                             <ul class="page-breadcrumb breadcrumb">
                 
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Our Bookings</a>
                  
                  </li>
                  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
             
               <div class="tabbable tabbable-custom boxless">
                  <ul class="nav nav-tabs">
                  
                     <li class="active"><a href="#tab_1" data-toggle="tab">Add Content</a></li>
                     <li><a  href="#tab_2" data-toggle="tab">View / Delete</a></li>
                  </ul>
                  <div class="tab-content">
                    
                     <div class="tab-pane active" id="tab_1">
                        <div class="portlet box blue">
                           <div class="portlet-title">
                              <div class="caption"><i class="icon-reorder"></i>Our Bookings</div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                               
                                 <a href="javascript:;" class="reload"></a>
                                 
                              </div>
                           </div>
                           <div class="portlet-body form">
                          
                              <!-- BEGIN FORM-->
                            <?php if($msg=='true')
							{
								echo "<h4 style='color:red;'>Content Added Sucessfully</h4>";
							}
							if($msg=='false')
							{
								echo "<h4 style='color:red;'>Content Not Added</h4>";
							}
							if($m=='fal')

							{
								echo "<h4 style='color:red;'>File Size Not Supported</h4>";
								
							}
							if($con=='empty')

							{
								echo "<h4 style='color:red;'>Description Should Not Empty</h4>";
								
							}
							?>
                        <div class="portlet-body form" id="para0" >
				     <form action=""  class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-body" >
                           <div class="alert alert-danger display-hide">
                              <button class="close" data-dismiss="alert"></button>
                              You have some form errors. Please check below.
                           </div>
                           <div class="alert alert-success display-hide">
                              <button class="close" data-dismiss="alert"></button>
                              Your form validation is successful!
                           </div>
                            <div class="form-group">
                              <label class="control-label col-md-3">From<span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="form" id="form">
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">To<span class="required">*</span></label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" name="to" id="to">
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">CarType<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <select class="form-control" name="cartype" id="cartype">
                                            <option selected>Select</option>
                                            <option>Super Luxuary</option>
                                            <option>Ultra Luxuary</option>                                                    
                                        </select>
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Packagetype<span class="required">*</span></label>
                              <div class="col-md-6">
                                  <select class="form-control" name="package" id="package">
                                    <option selected>Select</option>
                                    <option>Package-01</option>
                                    <option>Package-02</option>   
                                    <option>Package-03</option>                                                 
                                </select>
                              </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Date<span class="required">*</span></label>
                              <div class="col-md-6">
                                <input type="date" class="form-control" name="inputPassword" id="inputPassword">
                              </div>
                           </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">First Name<span class="required">*</span></label>
                              <div class="col-md-6">
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Last Name<span class="required">*</span></label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" id="lastname">
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Gender<span class="required">*</span></label>
                              <div class="col-md-6">
                                  <select class="form-control" name="gender" id="gender">
                                    <option selected>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>                                                    
                                </select>
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Age<span class="required">*</span></label>
                              <div class="col-md-6">
                               <input type="number" class="form-control" min="1" max="100" name="age" id="age" placeholder="">
                              </div>
                           </div>
                           
                             <div class="form-group">
                              <label class="control-label col-md-3">Email Address<span class="required">*</span></label>
                              <div class="col-md-6">
                                        <input type="email" class="form-control" name="emailaddress" id="emailaddress">
                              </div>
                           </div>
                               <div class="form-group">
                              <label class="control-label col-md-3">Phone Number<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" class="form-control"  name="phonenumber" id="phonenumber">
                              </div>
                           </div>
                           
                           
                           
                           
                           
                           
        
                           
                           
                           
                           
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="gallery" onClick="edit1()">Submit</button>
                              <button type="button" class="btn default" onClick="return toggleMe('para0')">Cancel</button>                              
                           </div>
                        </div>
                     </form>
                     
                  </div>
                              <!-- END FORM--> 
                           </div>
                        </div>
                     </div>
                    
                     <div class="tab-pane " id="tab_2">
                        <div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="icon-reorder"></i>Our Bookings</div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                                 <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                 <a href="javascript:;" class="reload"></a>
                                 <a href="javascript:;" class="remove"></a>
                              </div>
                           </div>
                           <div class="portlet-body form">
                           
                            <br><br><br>
                              <!-- BEGIN FORM-->
                             
 <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                           <tr class="odd gradeX">
                           <th>S.No</th>
                           <th>Name</th>
                              <th>Last Name</th>
                             <th>Gender</th>
                             <th>Age</th>
                             <th>Email</th>
                             <th>Mobile No</th>
                              <th>From</th>
                            
                            <th>To</th>
							<th>Car Type</th>
                           
                            <th>Package Type</th>
                           
                            <th >Travel Date</th>
                              <th >Status</th>
                              <th >Delete</th>
                               </tr>
                        </thead>
                        <tbody>
                           
                           
                           <?php
						  $s=1;
						   $editquery1=mysqli_query($conn,"SELECT * FROM booking_details");
			
						   while($show=mysqli_fetch_array($editquery1))
	{
		?>
        <tr class="odd gradeX">
        <td><?php echo $s ?>
        <td><?php  echo $show['firstname']; ?></td>
         <td><?php  echo $show['lastname']; ?></td>
          <td><?php  echo $show['gender']; ?></td>
           <td><?php  echo $show['age']; ?></td>
            <td><?php  echo $show['email']; ?></td>
             <td><?php  echo $show['phone_number']; ?></td>
              <td><?php  echo $show['from_location']; ?></td>
               <td><?php  echo $show['to_location']; ?></td>
                <td><?php  echo $show['car_type']; ?></td>
                 <td><?php  echo $show['package_type']; ?></td>
   
        <td ><?php echo $show['travel_date'] ?></td>
   
   <td><a href = "delete.php?type=gallerystatus&act=<?php echo $show['status']; ?>&id=<?php echo $show['b_id']; ?>" class="btn btn-xs blue">  Active</a></td>
   <td><a href = "delete.php?type=gallery&id=<?php echo $show['b_id']; ?>" class="btn btn-xs blue"><i class="icon-remove"></i></a></td>
        </tr>
    <?php
	$s++;
    }
	?>
						   
                          
                           
                        </tbody>
                     </table>
                           
                           </div>
                              <!-- END FORM-->                
                           </div>
                        </div>
                     </div>
                    
                    
                  </div>
               </div>
            </div>
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- END PAGE -->    
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  <?php include "includes/footer.php"; ?>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
   <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/portfolio.js"></script>      
   <script>
      jQuery(document).ready(function() {    
         App.init();
         Portfolio.init();
      });
   </script>
   
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
  <script src="assets/scripts/table-managed.js" type="text/javascript"></script>
   <script src="assets/scripts/table-editable.js" type="text/javascript"></script>
   <!-- END CORE PLUGINS -->
         
   <script>
      jQuery(document).ready(function() {    
         App.init();
		  TableManaged.init();
		   TableEditable.init();
      });
   </script>
 
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php } ?>
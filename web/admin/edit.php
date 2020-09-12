<?php
error_reporting(0);
session_start();
$xx=$_SESSION['aid'];
require_once('config.php');
$id=$_GET['id'];
$type=$_GET['type'];

if(isset($_SESSION['aid'])==NULL)
{
	header("Location:index.php");
}
else
{
	
	if(isset($_POST['project']))
{
 date_default_timezone_set('Asia/Calcutta');
$date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	
	$uploadDir = '../projects/';

$filename=$_FILES['pimage']['name'];

if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
	
	$tmpname=$_FILES['pimage']['tmp_name'];
$filesize=$_FILES['pimage']['filesize'];
$filetype=$_FILES['pimage']['filetype'];	
$filePath = 'projects/'.$dt. $filename;
	move_uploaded_file($tmpname,$filePath);
	
}
$uploadDir8= '../projects/';

$filename8=$_FILES['pimage1']['name'];
if($filename8==NULL)
{
	$pifilePath=$_POST['img1'];
}
else
{
$tmpname8=$_FILES['pimage1']['tmp_name'];
$filesize8=$_FILES['pimage1']['filesize'];
list($width,$height)=getimagesize($tmpname8);

$filetype8=$_FILES['pimage1']['filetype'];	
$pifilePath='projects/'.$dt.$filename8;

$result8=move_uploaded_file($tmpname8,$pifilePath);
if (!$result8) {
echo "Error uploading file";
exit;
}
 }
 $uploadDir3= '../projects/';

$filename3=$_FILES['pimage2']['name'];
if($filename3==NULL)
{
	$pifilePath1=$_POST['img2'];
}
else
{
$tmpname3=$_FILES['pimage2']['tmp_name'];
$filesize3=$_FILES['pimage2']['filesize'];
list($width,$height)=getimagesize($tmpname3);

$filetype8=$_FILES['pimage2']['filetype'];	
$pifilePath1='projects/'.$dt.$filename8;

$result3=move_uploaded_file($tmpname3,$pifilePath1);
if (!$result3) {
echo "Error uploading file";
exit;
}
 }
 $uploadDir4= '../projects/';

$filename4=$_FILES['pimage3']['name'];
if($filename3==NULL)
{
	$pifilePath2=$_POST['img3'];
}
else
{
$tmpname4=$_FILES['pimage3']['tmp_name'];
$filesize4=$_FILES['pimage3']['filesize'];
list($width,$height)=getimagesize($tmpname3);

$filetype4=$_FILES['pimage3']['filetype'];	
$pifilePath2='projects/'.$dt.$filename4;

$result4=move_uploaded_file($tmpname4,$pifilePath2);
if (!$result4) {
echo "Error uploading file";
exit;
}
 }
 $uploadDir5= '../projects/';

$filename5=$_FILES['pimage4']['name'];
if($filename5==NULL)
{
	$pifilePath3=$_POST['img4'];
}
else
{
$tmpname5=$_FILES['pimage4']['tmp_name'];
$filesize5=$_FILES['pimage4']['filesize'];
list($width,$height)=getimagesize($tmpname5);

$filetype5=$_FILES['pimage4']['filetype'];	
$pifilePath3='projects/'.$dt.$filename5;

$result5=move_uploaded_file($tmpname5,$pifilePath3);
if (!$result5) {
echo "Error uploading file";
exit;
}
 }
 /* Uploading proj Slides */
$uploadDir1= '../projslider/';

$filename1=$_FILES['simage']['name'];
if($filename1==NULL)
{
	$sfilePath=$_POST['simg'];
}
else
{
$tmpname1=$_FILES['simage']['tmp_name'];
$filesize1=$_FILES['simage']['filesize'];
list($width,$height)=getimagesize($tmpname1);

$filetype1=$_FILES['simage']['filetype'];	
$sfilePath='projslider/'.$dt.$filename1;

$result1=move_uploaded_file($tmpname1,$sfilePath);
if (!$result1) {
echo "Error uploading file";
exit;
}
 }
 $uploadDir = '../map/';

$filename=$_FILES['lmap']['name'];

if($filename==NULL)
{
	$filePath1=$_POST['img1'];
}
else
{
$tmpname=$_FILES['lmap']['tmp_name'];
$filesize=$_FILES['lmap']['filesize'];
list($width,$height)=getimagesize($tmpname);

$filetype=$_FILES['lmap']['filetype'];	
$filePath1 = 'map/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath1);
}

$uploadDir = '../brochure/';

$filename=$_FILES['bro']['name'];
if($filename==NULL)
{
	$filePath2=$_POST['img2'];
}
else
{
$tmpname=$_FILES['bro']['tmp_name'];
$filesize=$_FILES['bro']['filesize'];
list($width,$height)=getimagesize($tmpname);

$filetype=$_FILES['bro']['filetype'];	
$filePath2 = 'brochure/'.$dt.$filename;

move_uploaded_file($tmpname,$filePath2);
}
 
 
 
  
$dbdata=$_POST['tarea'];
$dbdata1=$_POST['tarea1'];
$dbdata2=$_POST['tarea2'];
$paddr=$_POST['addr'];
//echo "<script>alert($paddr); </script>";
$insert=mysql_query("update  projects set pname='".$_POST['pname']."',paddr='$paddr',pimage='$filePath',pimage1='$pifilePath',pimage2='$pifilePath1',pimage3='$pifilePath2',pimage4='$pifilePath3',simage='$sfilePath',brochure='$filePath2',updon='$date',updby='$xx' where pid='$id' ");	

  if($insert=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}
  
}
if(isset($_POST['events']))
{
	
	date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	
	$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}

$update=mysql_query("update events set ename='".$_POST['ename']."',edate='".$_POST['edate']."',image='$filePath',updby='$xx',
updon='$date' where eid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}
	
}

if(isset($_POST['home']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}

	$update=mysql_query("update home set title='".$_POST['title']."',content='".$_POST['tarea']."',image='$filePath',updby='$xx',
updon='$date' where hid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}

if(isset($_POST['about']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update aboutcon set title='".$_POST['title']."',content='".$_POST['tarea']."',updby='$xx',
updon='$date' where aid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}

if(isset($_POST['portfolio']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update portfolio set title='".$_POST['title']."',content='".$_POST['tarea']."',updby='$xx',
updon='$date' where pid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['services']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['imgs'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}
	$update=mysql_query("update services set title='".$_POST['title']."',subcontent='".$_POST['subcontent']."',content='".$_POST['tarea']."',image='$filePath',updby='$xx',
updon='$date' where sid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['exp']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update exp set title='".$_POST['title']."',content='".$_POST['tarea']."',updby='$xx',
updon='$date' where eid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['verticals']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update verticals set title='".$_POST['title']."',content='".$_POST['tarea']."',updby='$xx',
updon='$date' where vid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['points']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update points set title='".$_POST['title']."',content='".$_POST['tarea']."',updby='$xx',
updon='$date' where pid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['courses']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
		$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}

	$update=mysql_query("update courses set title='".$_POST['title']."',content='".$_POST['tarea']."',image='$filePath',updby='$xx',
updon='$date' where cid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['gallery']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}

	$update=mysql_query("update gallery set title='".$_POST['title']."',content='".$_POST['tarea']."',image='$filePath', updby='$xx',updon='$date' where gid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}
if(isset($_POST['testimonials']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$uploadDir = '../gallery/';

$filename=$_FILES['image']['name'];
if($filename==NULL)
{
	$filePath=$_POST['img'];
}
else
{
$tmpname=$_FILES['image']['tmp_name'];
$filesize=$_FILES['image']['filesize'];


$filetype=$_FILES['image']['filetype'];	
$filePath = 'gallery/'.$dt. $filename;

move_uploaded_file($tmpname,$filePath);
}

	$update=mysql_query("update testimonials set title='".$_POST['title']."',content='".$_POST['tarea']."',image='$filePath', updby='$xx',updon='$date' where tid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}

if(isset($_POST['contact']))
{
date_default_timezone_set('Asia/Calcutta');
    $date = date('d-m-y h:i:s');
	$dt=date('dmyhis');
	$update=mysql_query("update contacts set address='".$_POST['address']."',land='".$_POST['land']."',mobile='".$_POST['mobile']."',email='".$_POST['email']."',addrtype='".$_POST['addrtype']."',updby='$xx',updon='$date' where cid='$id' ");

if($update=='1')
	{
		$msg='true';
		
	}
	else
	{
		$msg='false';
	}	
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>RAMA INFO</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
  
   <?php include 'includes/links.php';?>
  <script type="text/javascript">
function toggleMe(a){
    var e = document.getElementById(a);
    if(!e) return true;
    if(e.style.display == "none") {
        e.style.display = "block"
    } else {
        e.style.display = "none"
    }
    return true;
}
</script>
<script type="text/javascript" src="assets/scripts/loading.js"></script>
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
function edit3()
{
	 var dat=nicEditors.findEditor('area5').getContent();
	  document.getElementById("tar2").value=dat;
	 
	
	 
}
function edit4()
{
	 var dat=nicEditors.findEditor('paddr').getContent();
	  document.getElementById("addr").value=dat;
	 
	
	 
}

function faqans()
{
	 var que=nicEditors.findEditor('fa').getContent();
	  document.getElementById("faq1").value=que;
	 //alert(que);
	
	 
}
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <?php include 'includes/header.php';?>
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
         <!-- BEGIN STYLE CUSTOMIZER -->
          <?php include 'includes/settings.php';?>
         <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
               <?php
			   $pro=mysql_query("select * from projects where pid='$id' ");
			   $rr=mysql_fetch_array($pro);
			   ?>
                  Edit <small><?php echo $rr['pname'] ?></small>
               </h3>
               
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box light-grey">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-user"></i><?php echo $rr['pname'] ?></div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                     </div>
                  </div>
                  
                  <div class="portlet-body" id="tog">
                  <?php if($msg=='true')
							{
								echo "<h4 style='color:red;'>Updated Sucessfully</h4>";
							}
							if($msg=='false')
							{
								echo "<h4 style='color:red;'> Not Updated</h4>";
							}
							
							?>
                     <div class="table-toolbar" >
                        
                        <div id="loading" style="display:none;"><img src="ajax_progress2.gif" alt="" /></div>
                  </div>
                  <?php
				  if($type=='project')
				  {
				  $edit=mysql_query("select * from projects where pid='$id' ");
				  $update=mysql_fetch_array($edit);
				  ?>
                        <div class="portlet-body form" id="para0" >
                        
				     <form action="#" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                     
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
                              <label class="control-label col-md-3">Project Type<span class="required">*</span></label>
                              <div class="col-md-6">
                                <select name="ptype" class="form-control" style="width:50%">
                                <option value="<?php echo $update['ptype']?>" selected><?php echo $update['ptype']?></option>
                                <?php
								if($update['ptype']=='Ongoing')
								{
								?>
                                <option value="Upcoming">Upcoming</option>
                                <option value="Completed">Completed</option>
                                <?php	
								}
								if($update['ptype']=='Upcoming')
								{
								?>
                                <option value="Ongoing">Ongoing</option>
                                <option value="Completed">Completed</option>
                                <?php	
								}
								if($update['ptype']=='Completed')
								{
								?>
                                <option value="Ongoing">Ongoing</option>
                                <option value="Upcoming">Upcoming</option>
                                <?php	
								}
								?>
                                
                                
                                </select> 
                              </div>
                           </div>
						                           
						   <div class="form-group">
                              <label  class="col-md-3 control-label">Project Name</label>
                              <div class="col-md-9">
                                 <div class="radio-list">
                                   <input type="text" name="pname" value="<?php echo $update['pname'] ?>" class="form-control" style="width:60%">
							</div>
                              </div>
							</div>
							<div class="form-group">
                              <label  class="col-md-3 control-label">Project Address</label>
                              <div class="col-md-9">
                                 <div class="radio-list">
                                   <textarea name="paddr" class="form-control" style="width:60%"><?php echo $update['paddr'] ?></textarea>
								   <input type="hidden" name="addr" id="addr" value="<?php echo $update['paddr'] ?>"/>
							</div>
                              </div>
							</div>
                              <div class="form-group">
                              <label class="col-md-3 control-label">Project Image<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="pimage"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['pimage'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="img" value="<?php echo $update['pimage'] ?>"  >
                                 
                              </div>
                           </div>
						     <div class="form-group">
                              <label class="col-md-3 control-label">Image2<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="pimage1"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['pimage1'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="img1" value="<?php echo $update['pimage1'] ?>"  >
                                 
                              </div>
                           </div>  <div class="form-group">
                              <label class="col-md-3 control-label">Image3<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="pimage2"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['pimage2'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="img2" value="<?php echo $update['pimage2'] ?>"  >
                                 
                              </div>
                           </div>  <div class="form-group">
                              <label class="col-md-3 control-label">Image4<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="pimage3"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['pimage3'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="img3" value="<?php echo $update['pimage3'] ?>"  >
                                 
                              </div>
                           </div>  <div class="form-group">
                              <label class="col-md-3 control-label">Image5<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="pimage4"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['pimage4'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="img4" value="<?php echo $update['pimage4'] ?>"  >
                                 
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="col-md-3 control-label">Slider Image<span class="required">*</span></label>
                              <div class="col-md-9">
                                 <input type="file" name="simage"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" class="form-control" style="width:50%"/>
                                 <img src="<?php echo $update['simage'] ?>" style="width:100px;height:100px;">
                                   <input type="hidden" name="simg" value="<?php echo $update['simage'] ?>"  >
                                 
                              </div>
                           </div>
                             
                              
                           </div>
						  	
                           
                            <div class="form-group">
                              <label class="control-label col-md-3">Brochure<span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input type="file" name="bro" class="form-control"  value="<?php echo $update['brochure'] ?>"/>
<img src="<?php echo $update['brochure'] ?>" style="width:100px;height:100px;">
                                 <input type="hidden" value="<?php echo $update['brochure'] ?>" name="img2">
                              </div>
                           </div>
						
                         <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="project" onClick="edit1(),edit2(),edit3(),edit4()">Update</button>
                              <a href="projects.php?#tab_5" style="text-decoration:none;"><button type="button" class="btn default" onclick="return toggleMe('para0')">Cancel</button></a>                              
                           </div>
                        </div>					   
                         </div>
                        
                     </form>
                     
                       </div>
                       <?php
				  }
				  
                   if($type=='home')
				  {
					  $event=mysql_query("select * from home where hid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="home" onClick="edit1(),edit2()">Update</button>
                              <a href="homecon.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				 
                   if($type=='about')
				  {
					  $event=mysql_query("select * from aboutcon where aid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                            
						 
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="about" onClick="edit1()">Update</button>
                              <a href="about.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				     if($type=='portfolio')
				  {
					  $event=mysql_query("select * from portfolio where pid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                            
						 
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="portfolio" onClick="edit1()">Update</button>
                              <a href="portfolio.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				    if($type=='services')
				  {
					  $event=mysql_query("select * from services where sid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
						    <div class="form-group">
                              <label class="control-label col-md-3">Sub Description</label>
                              <div class="col-md-6">
                                  <textarea name="subcontent" style="width: 800px; height: 300px;" id="area4" readonly></textarea>
								                                <input type="hidden" name="subcontent" id="tar" />

                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="imgs" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="services" onClick="edit1()">Update</button>
                              <a href="services.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				   if($type=='exp')
				  {
					  $event=mysql_query("select * from exp where eid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                            
						 
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="exp" onClick="edit1()">Update</button>
                              <a href="exp.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				   if($type=='verticals')
				  {
					  $event=mysql_query("select * from verticals where vid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                         
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="verticals" onClick="edit1()">Update</button>
                              <a href="verticals.php?#tab_2" style="text-decoration:none;">
							  <button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				   if($type=='points')
				  {
					  $event=mysql_query("select * from points where pid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                         
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="points" onClick="edit1()">Update</button>
                              <a href="points.php?#tab_2" style="text-decoration:none;">
							  <button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				  if($type=='courses')
				  {
					  $event=mysql_query("select * from courses where cid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                            <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
						 </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="courses" onClick="edit1()">Update</button>
                              <a href="courses.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				  if($type=='innovation')
				  {
					  $event=mysql_query("select * from innovation where iid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly><?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
                            
						 <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="innovation" onClick="edit1()">Update</button>
                              <a href="innovation.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				     				  if($type=='vision')
				  {
					  $event=mysql_query("select * from vision where vid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly>
								 <?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="vision" onClick="edit1()">Update</button>
                              <a href="vision.php?#tab_2" style="text-decoration:none;">
							  <button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				   				  if($type=='gallery')
				  {
					  $event=mysql_query("select * from gallery where gid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Title<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
						   
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly>
								 <?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="gallery" onClick="edit1()">Update</button>
                              <a href="gallery.php?#tab_2" style="text-decoration:none;">
							  <button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				  	  if($type=='testimonials')
				  {
					  $event=mysql_query("select * from testimonials where tid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Client Name<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="title" class="form-control" value="<?php echo $evdate['title'] ?>">
                              </div>
                           </div>
						   
                           <div class="form-group">
                              <label class="control-label col-md-3">Description<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <textarea name="area3" style="width: 800px; height: 300px;" id="area3" readonly>
								 <?php echo $evdate['content'] ?></textarea>
                              <input type="hidden" name="tarea" id="tar" />
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="control-label col-md-3"> Image<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="file" name="image"   value=""   size="2000000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png"/>
                                 <img src="<?php echo $evdate['image'] ?>" style="width:100px;height:100px;">
								<input type="hidden" name="img" value="<?php echo $evdate['image'] ?>">
                                 
                              </div>
                         
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="testimonials" onClick="edit1()">Update</button>
                              <a href="testimonials.php?#tab_2" style="text-decoration:none;">
							  <button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				  if($type=='contact')
				  {
					  $event=mysql_query("select * from contacts where cid='$id' ");
					  $evdate=mysql_fetch_array($event);
					  ?>
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
                              <label class="control-label col-md-3">Address<span class="required">*</span></label>
                              <div class="col-md-6">
                                 
                                 <textarea name="address" class="form-control"><?php echo $evdate['address'] ?></textarea>
                              </div>
                           </div>
                            <div class="form-group">
                              <label class="control-label col-md-3">Landline<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="land" class="form-control" value="<?php echo $evdate['land'] ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-md-3">Mobile<span class="required">*</span></label>
                              <div class="col-md-6">
                                 <input type="text" name="mobile" class="form-control" value="<?php echo $evdate['mobile'] ?>">
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="control-label col-md-3">Email<span class="required">*</span></label>
                              <div class="col-md-6">
                              <input type="email" name="email" class="form-control" required value="<?php echo $evdate['email'] ?>"/>
                              </div>
                           </div>
						   <div class="form-group">
                              <label class="control-label col-md-3">Address Type<span class="required">*</span></label>
                              <div class="col-md-6">
                              <select name="addrtype">
							  <option value="<?php echo $evdate['addrtype'] ?>"><?php echo $evdate['addrtype'] ?></option>
							  <?php if($evdate['addrtype']=='Head Office')
							  {?>
							  <option value="Branch Office">Branch Office</option>
							  <?php 
							  }else if($evdate['addrtype']=='Branch Office'){ ?>
							  <option value="Head Office">Head Office</option>
							  <?php } ?>
							  </select>
                              </div>
                           </div>
						   
                         </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green" name="contact">Update</button>
                              <a href="contactdetails.php?#tab_2" style="text-decoration:none;"><button type="button" class="btn default" >Cancel</button></a>                              
                           </div>
                        </div>
                     </form>
                  <?php   
				  }
				  
				  
				  ?>
                    
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
         </div>
         
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <?php include 'includes/footer.php';?>
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
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/table-managed.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableManaged.init();
      });
   </script>
   <script src="assets/scripts/table-editable.js"></script>    
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableEditable.init();
      });
   </script>
   

</body>
<!-- END BODY -->
</html>
<?php
}
?>

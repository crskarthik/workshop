<?php
error_reporting(0);
if(isset($_POST["username"])&&isset($_POST["password"]))
{
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Simple BootStrap example project that randomizes students to help create groups">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>workshop</title>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="assets/css/home.css" rel="stylesheet" type="text/css"></link>
  
</head>
<body>
<?php
include('dbconfig.php');
// Escape String method which avoid illegal variables from accessing database
// $username=mysqli_escape_string($_POST["username"]);
// $password=mysqli_escape_string($_POST["password"]);

$username=$_POST["username"];
$password=$_POST["password"];
if($conn){
    $sql = "SELECT count(*)as total FROM demo WHERE USERNAME='$username' and PASSWORD = '$password'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    
    if($data['total']==1){

    
    ?>

    <section class="team">
    <div class="container-fluid">
        
        <div class="row">
            <h2 style="display:inline-block;padding-left:40%;">Welcome <?php print $username; ?></h2>
            <a href="./" class="btn btn-danger btn-sm" style="float:right;margin:20px;">Logout</a>
        <hr>
        <div class="col-md-10 col-md-offset-1">
            <div class="col-lg-12">
            <h6 class="description">OUR TEAM<br><?php echo $sql; ?></h6>
            <div class="row pt-md">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/karthik.jpg" class="img-responsive">
                    <ul class="text-center">
                    <a href="http://fb.com/rajasrikar" target="_blank"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="https://twitter.com/rajasrikar2010" target="_blank"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="http://linkedin.com/in/karthikcrs/" target="_blank"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h1>Karthik</h1>
                <h2>Mobile app, Web & Mainframe Developer</h2>
                <p>Nothing much to say!!!</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/praneetha.jpeg" class="img-responsive">
                    <ul class="text-center">
                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h1>Praneetha</h1>
                <h2>Blah Blah</h2>
                <p>Even More Blah! Blah!...Blah!</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/vishal.jpeg" class="img-responsive">
                    <ul class="text-center">
                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h1>Vishal</h1>
                <h2>Blah Blah</h2>
                <p>Even More Blah! Blah!...Blah!</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                <div class="img-box">
                    <img src="assets/img/siva.jpeg" class="img-responsive">
                    <ul class="text-center">
                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                    <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                    </ul>
                </div>
                <h1>Sai Kumar</h1>
                <h2>Blah Blah</h2>
                <p>Even More Blah! Blah!...Blah!</p>
                </div>

                
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <?php

    } else {
        echo $sql;
       ?>
        <!-- <script>window.location.href="index.php?error=<?php echo base64_encode("error");?>"</script> -->
       <?php

    }

    ?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    
    </html>


<?php
    $conn->close();
}
}
else{
    ?>
    <script>window.location.href="./"</script>
    <?php
}
?>

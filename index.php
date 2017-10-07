<?php
$login_error=false;
if(isset($_GET["error"])){
   if(base64_encode('error')==$_GET['error'])
    $login_error=true;
}

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
  <link href="assets/css/login.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<?php if($login_error)
{
    ?>
<div class="row" style="padding-top:15px">
        <div class="col-sm-5 col-md-6 col-md-offset-3">
        <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button> 
            <h4>Oh snap! You got an error! Try Hard buddy</h4> 
            <p>Invalid Username and Password</p> 
            <!-- <p> <button type="button" class="btn btn-danger">Take this action</button> 
            <button type="button" class="btn btn-default">Or do this</button> </p>  -->
        </div>
        </div>
    </div>
<div class="container" style="padding-top:03%">
    <?php
}else{
    ?><div class="container" style="padding-top:08%">
    <?php
}?>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Try SQL Injection on me... <br/><strong>I really don't mind</strong></h1>
            <div class="account-wall">
                <!-- <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" -->
                <img class="profile-img" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"
                    alt="">
                <form class="form-signin" action="login.php" method="post">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>

                <a href="" data-toggle="modal" data-target="#injectionHelp" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
          
        </div>
    </div>
</div>

<div class="modal fade" id="injectionHelp" tabindex="-1" role="dialog" aria-labelledby="injectionHelpLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="injectionHelpLabel"SQL Injection Tips</h4>
    </div>
    <div class="modal-body">
      Always try to get all conditions true in SQL query<br>

<div class="bs-callout bs-callout-primary">
  <h4>Method 1</h4>
  using:<code>'or ''='</code>
</div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
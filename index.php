<?php 
  $msg=''; //for show success msg
  
  if (isset($_POST['button'])) {
    $link = mysqli_connect('localhost','root','','db_student_info');
    $sql = "INSERT INTO tbl_student(student_name,student_email, student_phone_number,student_address) VALUES('$_POST[student_name]','$_POST[student_email]','$_POST[student_phone_number]','$_POST[student_address]')";
    mysqli_query($link, $sql);

    $msg='student info added successfully';
  }
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student Information</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Student Information</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Add Student</a></li>
            <li><a href="manage-student.php">Manage Student</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Main component for a primary marketing message or call to action -->
                <div class="jumbotron">

                  <h4 class="success"><?php echo $msg ?></h4>
                  <hr>
                    <form class="form-signin" method="POST" action="">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        
                        <label for="inputName" class="sr-only">Name</label>
                        <input name="student_name" type="text" id="inputName" class="form-control" placeholder="User Name" required autofocus>
                        
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input name="student_email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        
                        <label for="inputNumber" class="sr-only">Phone Number</label>
                        <input name="student_phone_number" type="number" id="inputNumber" class="form-control" placeholder="Phone Number" required autofocus>
                        
                        <label for="inputAddress" class="sr-only">Address</label>
                        <textarea name="student_address" type="text" id="inputAddress" class="form-control" placeholder="Address" required></textarea>
                        
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Save Student Info</button>
                    </form>


                </div>
            </div>
        </div>
      

    </div> <!-- /container -->
      
      
      
      
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


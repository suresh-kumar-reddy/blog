
<?php
  include"database.php";
    $sql1="SELECT * FROM home_others WHERE id='1'";
    $res1=$db->query($sql1);

    if($res1->num_rows>0)
    {
      $row1=$res1->fetch_assoc();
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
  body {
 background-image: url("slides/background-2.jpg");
 background-color: #cccccc;
}
</style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" href="img/logo.png">
  
  <title>FREE BLOGGER</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="css/style.css" />

  
</head>

<body>
    <?php include "menu.php" ?>
    <br><br><br><br>

            <h4 style="text-align: center; color: black;">Register</h4><br>
          <?php
            if(isset($_POST["submit"]))
            {

                $sq="insert into blogposter(BNAME,BPASS,PHONE,MAIL) values ('{$_POST["name"]}','{$_POST["password"]}','{$_POST["pho"]}','{$_POST["email"]}')";
                
                if($db->query($sq))
                {
                  echo "<div class='success'>Registered Successfully</div>";

                }
                else
                {
                  echo "<div class='error'>Insert Failed</div>";
                }
          

          
            }
          
          
          
          
          ?>
      
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="lbox" style="text-align: center; color: black">
          
          <label> Name</label><br>
          <input type="text" class="input" name="name" required autofocus placeholder="name" pattern="[a-zA-Z ]{3,}" title="Please enter more than three letters"><br><br>
  
          <label> PASSWORD</label><br>
          <input type="password" class="input" name="password" required placeholder="password"  title="Please enter valid password"><br><br>
          
          <label> Phone No</label><br>
          <input type="text" class="input"  pattern="[0-9]{10}" title="Only 10 digits allowed" name="pho" required=""><br><br>
        
        
          <label> Mail Id</label><br>
          <input type="email" class="input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid email address." required=""><br><br>
	
      <button type="submit" class="primary-button" name="submit">Sign Up</button><br><br><br>
        </div>
          
        </form>
        
        
        </div>
        
        
      </div>
  


<?php include "footer2.php" ?>
          </body>
</html>



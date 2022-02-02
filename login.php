<?php
    require_once "model.php";

if(isset($_POST["login"]))
{
   if(isset($_POST["uname"]) && $_POST["psw"])
   {
    $email = $_POST["uname"];
    $password=md5($_POST["psw"]);

    $login = new Config();

    $login->login($email, $password);

    $res=$login->login($email, $password);
    
    if($res){
       echo "Sikeres login!";
       header("Location:admin.php");
    }
    else
    {
       echo "Sikertelen login!";
    }
    exit();
   }

}

?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="loginstyle.css">
<title>Bejelntkezés</title>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
    

<div class="sidenav">
         <div class="login-main-text">
            <h2>Bejelntkezés</h2>
            <p>Jelentkezz be az admin felületbe</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12 p-5">
            <div class="login-form">
               <form method="post">
                  <div class="form-group">
                     <label>Felhasználónév</label>
                     <input type="text" class="form-control" placeholder="Felhasználónév" name="uname" required>
                  </div>
                  <div class="form-group">
                     <label>Jelszó</label>
                     <input type="password" class="form-control" placeholder="Jelszó" name="psw" required>
                  </div>
                  <button type="submit" class="btn btn-black" name="login" id="login" >Belépés</button>
               </form>
            </div>
         </div>
      </div>

      <div class="error"></div>

</body>
</html>
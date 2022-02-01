<?php
    require_once "model.php";
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
               <form>
                  <div class="form-group">
                     <label>Felhasználónév</label>
                     <input type="text" class="form-control" placeholder="Felhasználónév" id="name" required>
                  </div>
                  <div class="form-group">
                     <label>Jelszó</label>
                     <input type="password" class="form-control" placeholder="Jelszó" id="psw" required>
                  </div>
                  <button type="submit" class="btn btn-black" id="login">Belépés</button>
               </form>
            </div>
         </div>
      </div>

      <div class="error"></div>

      <script>
          
              $('#login').click(function(e){
                  e.preventDefault();
                  $.ajax({
                    type:"post",
                    dataType:"json",
                    data: {name: name, psw: psw},
                    success: function(data) {
                        successmessage = 'Sikeres bejelntkezés';
                        $(".error").text(successmessage);
                    },
                    error: function(data) {
                        errorsmessage = 'Érvénytelen jelszó';
                        $(".error").text(errormessage);
                    }
                  
              })
          })
      </script>
</body>
</html>
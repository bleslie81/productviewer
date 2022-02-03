<?php
    require_once "model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Admin felület</title>
    <style>
        ul>li{
            padding:10px;
            color:white;
            font-family: 'Fredoka One', cursive;
            text-align:center;
        }
		*{
			margin:0;
			box-sizing:border-box;
		}
        ul>li>a,
        ul>li>a:hover{
            text-decoration: none;
            color:white;
        }

        .navbar{
            justify-content:center;
        }
		
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#">Terméklista</a></li>
                <li class="nav-item"><a href="#">Termék feltöltése</a></li>
                <li class="nav-item"><a href="#">Kategória létrehozása</a></li>
                <li class="nav-item"><a href="index.php">Kilépés</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center" style="padding-top: 20px;">
            <div class="col-lg-10">
                <!-- <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else{echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <?php if(isset($_SESSION['message'])){
                    echo $_SESSION['message']; unset($_SESSION['showAlert']);
                }?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kép</th>
                            <th>Megnevezés</th>
                            
                            <th>
                                Termék törlése
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $result = new Config();
                                $rows=$result->fetchAllProduct();
                                foreach($rows as $row){                            
                            ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <input type="hidden" class="pid" value="<?= $row['id']; ?>">
                                <td><img src="<?= $row['image']; ?>" height="100"/></td>
                                <td><?= $row['name'];?></td>
                                <td><a href="action.php?remove=<?= $row['id']; ?>" class="text-danger lead" onclick="return confirm(' Biztos törölni szeretnéd ezt az elemet?');"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            
                            
                            <?php 
                                } 
                            ?>
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
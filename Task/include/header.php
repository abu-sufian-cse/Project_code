<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/
bootstrap/4.5.e,/css/bootstrap.
<script src="https://code.jquery.com/jquery-3.5.1.s1im.js" integrity="
sha256-DrT5NfxfbHvPYux31Lkhxg42LY60f8TaYyK5ejnxRnM=" crossorigin="anonymous"></
script>
<script src="https://ajax.goog1eapis.com/ajax/1ibs/jquery/3.5.1/jquery.min.js"></
script>
< link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/
font-awesome/4.7. e/ css/font -awesome. min. css " >
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.13. e/ j s/ all.
< link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/ 5.13. e,/css/all. min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <a href="index.php"> <h5 class="text-white">Hospital management System</h5> </a>
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
            <?php
            if(isset($_SESSION['admin'])){
                $user = $_SESSION['admin'];
                echo 
                <li class="nav-item"><a href="#" class="nav-link text text-white">Log Out</a></li>
            }
            else if (isset($_SESSION ['doctor'])){
                $user= $_SESSION['doctor'];
                echo
                <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
            } else{
                echo
                <li class="nav_item"><a href="index.php" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="adminlogin.php" class="nav-link text white">Admin</a></li>
                <li class="nav-item"><a href="doctorlogin.php" class="nav-link text white">Doctor</a></li>
                <li class="nav-item"><a href="patientlogin.php" class="nav-link text white">Patient</a></li>
            }
            ?>
        </ul>
    </nav>
</body>
</html>
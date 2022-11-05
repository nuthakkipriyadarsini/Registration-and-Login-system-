
<?php

$db=new mysqli("localhost","root","","registration_db");

if($db)
{
  //echo "db is connected";
}
else {

  echo " db is not connected";

}


//if(!isset($_SESSION['user_name'])){
   //header('location:login_form.php');
//}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Requidanger meta tags -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png" />

    <link rel="stylesheet" href="css\styles.css">

    <title>MYTEMS | Home</title>
</head>

<body>
    <nav class="navbar py-3 navbar-expand-md navbar-dark bd-indigo-900 bg-dark sticky-top">
        <div class="container-md">
            <a class="navbar-brand" href="index.php">
                <span class="fw-bold fs-3">MYTEMS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div id="main-nav" class="collapse navbar-collapse justify-content-end align-center">
                <ul class="navbar-nav">

                  <li class="nav-item mx-2 py-1">
                      <a class="nav-link text-white fw-bold" href="">About</a>
                  </li>
                  <li class="nav-item mx-2 py-1">
                      <a class="nav-link text-white fw-bold" href="">Services</a>
                  </li>
                  <li class="nav-item mx-2 py-1">
                      <a class="nav-link text-white fw-bold" href="">Contact</a>
                  </li>

                    <li class="nav-item mx-2 py-1 d-md-none">
                        <a class="nav-link text-white fw-bold" href="l22.php">Login</a>
                    </li>
                    <li class="nav-item mx-2 py-1 d-none d-md-inline">
                        <a class="btn btn-secondary text-white fw-bold" href="l22.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="home_main" >

   <img  src="images.png" width="100%" height="100%"/>
    </main>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    -->

</body>

</html>

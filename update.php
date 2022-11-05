<?php

$db=new mysqli("localhost","root","","registration_db");

if($db)
{
  //echo "db is connected";
}
else {

  echo " db is not connected";

}


$id=$_GET['updateid'];



if(isset($_POST['submit']))
{
if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])  && !empty($_POST['phone']) && !empty($_POST['passward']) )
{
  $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $passward=$_POST['passward'];

  $query="UPDATE `form` SET id='$id',firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',passward='$passward' where id=$id ";

//$query="SELECT * FROM `form` WHERE email='$email' && passward='$passward'";
    $run=mysqli_query($db,$query) or die(mysqli_error());

    if($run)
    {
      echo "update Succesfully";
  }

    else {
     die(mysqli_error($db));
    }
}




}




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
             <a class="navbar-brand" href="index.html">
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
                         <a class="nav-link text-white fw-bold" href="login.php">Login</a>
                     </li>
                     <li class="nav-item mx-2 py-1 d-none d-md-inline">
                         <a class="btn btn-secondary text-white fw-bold" href="login.php">Login</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>

     <section class="loginorregisteration">
         <div class="container my-5 py-5">
             <div class="row">
                 <div class="col-12 col-sm-7 col-md-6 m-auto">
                     <div class="card border-0 shadow">
                         <div class="card-body">
                             <div class="mx-auto my-3 text-center" style="width: auto;">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                     class="bi bi-person-circle" viewBox="0 0 16 16">
                                     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                     <path fill-rule="evenodd"
                                         d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                 </svg>
                             </div>
                             <form method="post" action="insert.php">

                                      <div class="mb-3">
                                 <label for="firstname" class="form-label">Firstname</label>
                                 <input type="text" class="form-control" id="firstname" name="firstname">
                              </div>

                              <div class="mb-3">
                                <label for="Lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                             </div>

                             <div class="mb-3">
                                 <label for="email" class="form-label">Email address</label>
                                 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" >
                                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                             </div>

                             <div class="mb-3">
                                 <label for="phone" class="form-label">Contact Number</label>
                                 <input type="text" class="form-control" id="phone" aria-describedby="PhoneHelp" name="phone">
                                 <div id="PhoneHelp" class="form-text">We'll never share your Contact Number with anyone else.</div>
                             </div>


                              <div class="mb-3">
                                <label for="passward" class="form-label">Password</label>
                                 <input type="password" class="form-control" id="passward" name="passward">
                               </div>

                               <div class="mb-3">
                                 <label for="Cpassward" class="form-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="Cpassward" name="Cpassward">
                                </div>
                                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>





                                    </form>

                                     <a href="login.php" class="nav-link">Already have an account ?</a>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>


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

<?php

include 'insert.php';


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>crud operation</title>
  </head>
  <body>

     <div class="container">

      <button class="btn btn-primary my-5"><a  href="register1.php" class="text-light">ADD USER </a></button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">passward</th>
        <th scope="col">operation</th>


    </tr>
  </thead>
  <tbody>

    <?php


    $sql="SELECT * FROM `form` ";

    $result=mysqli_query($db,$sql);

    if($result)
    {

      while($row=mysqli_fetch_assoc($result))
      {

        $id=$row['id'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $passward=$row['passward'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$firstname.'</td>
      <td>'.$lastname.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$passward.'</td>

      <td>
         <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-light"> UPDATE</a></button>
         <button class=" btn btn-danger"><a href="delete.php ? deleteid='.$id.'" class="text-light"> DELETE</a></button>
      </td>

       </tr>';




      }


    }


?>



  </tbody>
</table>

     </div>


  </body>
</html>

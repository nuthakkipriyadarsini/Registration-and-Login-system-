<<?php

include 'insert.php';

if(isset($_GET['deleteid']))
{
   $id=$_GET['deleteid'];

   $sql="DELETE FROM `form`  where id=$id";

   $result=mysqli_query($db,$sql);

   if($result)
   {
     //echo "Deleted Succesfully";
     header('location:display.php');
   }
   else {
     die(mysqli_error($db));
   }


}


 ?>

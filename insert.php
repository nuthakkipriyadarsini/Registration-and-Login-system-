



<?php

$db=new mysqli("localhost","root","","registration_db");

if($db)
{
  //echo "db is connected";
}
else {

  echo " db is not connected";

}



if(isset($_POST['submit']))
{
if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])  && !empty($_POST['phone']) && !empty($_POST['passward']) )
{
  $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $passward=$_POST['passward'];

    $query="insert into form(firstname,lastname,email,phone,passward) values ('$firstname'  , '$lastname','$email','$phone','$passward')";

    $run=mysqli_query($db,$query) or die(mysqli_error());

    if($run)
    {
      //echo "submitted";

       header('location:display.php');


    }

    else {
      echo "not submitted";
    }


}

else{

  echo "all fields required";
}



}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>insert</title>
  </head>
  <body>








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
  </body>
</html>

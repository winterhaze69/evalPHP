<?php

session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>evalPHP</title>
  </head>
  <body style="background-color:lightgrey">
    <form action="index.php" method="post">
      <h1>  Login: </h1>
  <label>Firstname:</label> <input type="text" name="firstname" placeholder="Ex:Peter" required>
  lastname: <input type="text" name="lastname" placeholder="Ex:Pan" required >
   <input type="submit" value="connect">
   <br>
    <br>
    <br>
  <h1>  Hobbies: </h1>
  <p>What do you enjoy? If u enjoy anything..</p>
    <input type="text" name="firstHobby" placeholder="Ex:Baseball"><br>
    <input type="text" name="secondHobby" placeholder="Ex:party"><br>
    <br>
     <br>
     <br>
    <h1>  Contact: </h1>
    <p>Do you have friends you wish to tag?</p>
     <input type="text" name="firstFriend" placeholder="Ex:Tom"><br>
     <input type="text" name="secondFriend" placeholder="Ex:Jedusor"><br>
   </form>



  </body>
</html>

<?php
/*Avec un peu plus de temps j aurai fais 3 "home page" différentes selon la div souhaitée
mais comme j avais mal compris l'énnoncé j ai du faire une refonte complete, dsl et bonne correction"*/

include('./templates/header.php');


session_start();
 ?>

    <main class="flex">
      <div id="home" class="home">
         <div class="theLayer">
           <form action="page3.php" method="post">
            <?php
             if ( (!empty($_POST['firstname']) && !empty($_POST['lastname'])) || (!empty($_POST['firstname']) || !empty($_POST['lastname'])) ) {

          $_SESSION['firstname'] = $_POST['firstname'];
          $_SESSION['lastname'] = $_POST['lastname'];

          echo "Hey " . $_SESSION['firstname'] .
           " " . $_SESSION['lastname'] . " ! " ;

          echo "<input type='submit' name='disconnect' value='disconnect'>";
        }else {
          echo "<br><a href='home.php'></a> please identify yourself! :) ";
          echo "<a href='home.php'>home</a>";}
        ?>
           </form>
         </div>
      </div>
      <div id="hobby" class="hobby">
         <div class="theLayer2">
           <form action="page3.php" method="post">
        <?php
        if ( (!empty($_POST['firstHobby']) && !empty($_POST['secondHobby'])) || (!empty($_POST['firstHobby']) || !empty($_POST['secondHobby'])) ) {

          $_SESSION['firstHobby'] = $_POST['firstHobby'];
          $_SESSION['secondHobby'] = $_POST['secondHobby'];

          echo "so you like " . $_SESSION['firstHobby'] .
           " and you also appreciate " . $_SESSION['secondHobby'] . " ,nice! " ;

          echo "<a href='home.php'>change</a>";
        }else {
          echo "<div id='hobby' class='hobby' style= display: none;>";
          echo "<a href='home.php'>add</a>";}
        ?>
      </form>
        </div>
      </div>
      <div id="contact" class="contact">
       <div class="theLayer3">
        <form action="page3.php" method="post">
        <?php
        if ( (!empty($_POST['firstFriend']) && !empty($_POST['secondFriend'])) || (!empty($_POST['firstFriend']) || !empty($_POST['secondFriend'])) ) {

          $_SESSION['firstFriend'] = $_POST['firstFriend'];
          $_SESSION['secondFriend'] = $_POST['secondFriend'];

          echo "Lucky " . $_SESSION['firstFriend'] .
           " has been tagged and " . $_SESSION['secondFriend'] . " too, lucky them! " ;

          echo "<a href='home.php'>change</a>";
        }else {
          echo "<div id='contact' class='contact' style= display: none;>";
          echo "<a href='home.php'>add</a>";
          }
        ?>
        </form>
       </div>
      </div>
    </main>
<?php

include('./templates/footer.php');

?>

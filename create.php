<?php
  require_once('lib/print.php');
  require_once('view/top.php');
   ?>

       <h2>
         <?php
         print_title();
          ?>
       </h2>
    <?php
    print_description();
     ?>
     <br>
     <a href="http://localhost/IBwith/create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
    <a href="http://localhost/IBwith/update.php?id<=$_GET['id']>">update</a><?php } ?>
    <form class="" action="http://localhost/IBwith/create_process.php" method="post">
           <p><input type="text" name="title" placeholder="Title"></p>
           <p><textarea name="description"></textarea></p>
           <p><input type="submit"></p>
          </form>
          <hr>
    <?php
  require('view/bottom.php');
     ?>

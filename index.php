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

      <a href="http://localhost/IBwith/create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
     <a href="http://localhost/IBwith/update.php?id=<?=$_GET['id']?>">update</a>

     <form action="http://localhost/IBwith/delate_process.php" method="post">
       <input type="hidden" name="id" value="<?=$_GET['id']?>">
       <input type="submit" value="delate">
     </form>
    <?php } ?>


  <?php
require('view/bottom.php');
   ?>
5fcC1m6aUWmDq1La1ze9AC6tAddylAsx6lDOkyJR

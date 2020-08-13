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
        <?php if(isset($_GET['id'])) { ?>
    <a href="http://localhost/IBwith/update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>

         <form action="http://localhost/IBwith/update_process.php" method="post">
           <p><input type="hidden" name="old_title" value="<?=$_GET['id']?>"></p>
           <p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"></p>
           <p><textarea name="description" placeholder="Description"><?php print_description(); ?></textarea></p>
           <p><input type="submit"></p>
         </form>
<hr>
<?php
require('view/bottom.php');
 ?>

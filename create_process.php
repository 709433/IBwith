<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
header('Location: http://localhost/IBwith/index.php?id='.$_POST['title']);
 ?>

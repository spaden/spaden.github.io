<?php
 $conne=mysqli_connect('localhost','root','','spadendbs');
?>
<?php
   $name=$_POST['username'];
   $pss=$_POST['pas'];
   $result=mysqli_query($conne,"insert into users(username,password) values('$name','$pss')");
   echo $name;
   header( 'Location: http://localhost/spaden/index.html' );
   
?>
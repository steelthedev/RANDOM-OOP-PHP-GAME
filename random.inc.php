<?php
include'random.class.php';

if (isset($_GET['submit'])) {
  
  $game=$_GET['game'];
  $random=rand(0,10);
  
  $calc= new rand((int)$game,$random);
  
  echo $calc -> play();
  
  
}else {
  header("Location:index.php");
}
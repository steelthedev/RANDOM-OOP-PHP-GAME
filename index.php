<?php
declare(strict_types= 1);

?>

<!DOCTYPE html>
<html>
  <head><title>The php random game</title></head>
<body>
  <h1>Welcome To The Guessing Game : Php version </h1>
  
  <p>i am a number between 0 and 10;Take a guess </p>
  <form action="random.inc.php" method="GET">
  <input type="number" name="game"placeholder="input Guess ">
  <button type="submit" name="submit">submit</button>
  </form>
  
  
</body>
  
</html>

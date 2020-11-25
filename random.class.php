<?php
declare(strict_types= 1);

class rand{
  //properties
  public $random;
  public $guess;
  
  //method 
  
  public function __construct(int $guess,$random){
    $this->guess=$guess;
    $this->random=$random;
  }
  
  public function play(){
    if ($this->guess < $this->random) {
      echo "oops! Your guess is too low";
    }elseif ($this->guess > $this->random) {
      echo "oops! Your guess is too high";
  }else {
      echo "yay! Your guess is correct <br>" ;
    echo"the number is" .$this->random;
  
}
}
}
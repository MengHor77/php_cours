<?php  
   function  greeting($arg1="Hello", $arg2="world") {
      echo $arg1 . " ". $arg2 .'';
   }

  echo  greeting(). "</br>"; //output hello world
  echo  greeting("Thank you"). "</br>"; // output : Thank you world
  echo greeting("Welcome", "back"). "</br>";// output: Welcome back
  echo greeting("PHP"). "</br>";// output : PHP world 
?>
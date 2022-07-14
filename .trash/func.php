<?php 
//global
$say = "saya global<br>";
$juga = "saya juga global";

  function declarewoe (){
    //local (inside function)
    $var=12;
    $var+=3;
     

      if ($var==15) {
        echo "benar varyyyy adalah 15! <br>";
        
        
    }
      global $say,$juga;
      echo $say.$juga;

  }
  declarewoe();

 

?>

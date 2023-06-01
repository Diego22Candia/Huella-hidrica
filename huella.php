

<?php
if($_POST){

    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $num3=$_POST['n3'];
    $num4=$_POST['n4'];
    $num5=$_POST['n5'];
    $num6=$_POST['n6'];
    $num7=$_POST['n7'];
    $num8=$_POST['n8'];
    
    $a=$num1*10;
    $b=$num2*20;
    $f=$num6*3;
    $h=$num7*12;
    $i=$num8*8;

    $j=$a+$b+$f+$h+$i;


    $a1=$a*7;
    $a2=$f*7;
    $a3=$h*7;
    $a4=$i*7;

    $c=$num3*$b;
    $d=$num4*6.5;
    $e=$d*$num5;

    $k=$a1+$c+$e+$a2+$a3+$a4;

    $b1=$a1*4;
    $b2=$c*4;
    $b3=$e*4;
    $b4=$a2*4;
    $b5=$a3*4;
    $b6=$a4*4;   

    $l=$b1+$b2+$b3+$b4+$b5+$b6;

    $m=$l*12;

    echo"<br>";
   echo" litros al dia: ".$j."";
    echo"<br>";  
    echo"<br>"; 

    echo" litros a la semana: ".$k."";
    echo"<br>"; 
    echo"<br>"; 

    echo" litros al mes: ".$l."";
    echo"<br>"; 
    echo"<br>"; 

    echo" litros al año: ".$m."";
    echo"<br>"; 
    echo"<br>"; 

}


if ($m>123000){

    echo"Su Huella Hidrica personal Es una cifra alta";
    echo"<br>";

  }if ($m<123000){

      echo"Su Huella Hidrica personal Es una cifra promedio";
      echo"<br>";
      echo"<br>";
  }

?>



<style>

header{
        width: 100%;
       
    }

body {
      background: url(1.jpg);
      background-size: cover;
      background-position: center;
  }

    </style>
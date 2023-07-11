<?php
 $marks=89;
 if($marks<40){
    echo "fail";
  }else if($marks>=40 && $marks<50){
      echo "pass";
  }else if($marks>=50 && $marks<60){
      echo "c";
  }else if($marks>=60 && $marks<70){
      echo "B";
  }else if($marks>=70 && $marks<80){
      echo "B+";
  }else if($marks>=80 && $marks<90){
      echo "A";
  }else if($marks>=80 && $marks<90){
      echo "A";
  }else if($marks>=90 && $marks<=100){
      echo "A+";
  }else{
      echo "invalid roll number";
  }
?>
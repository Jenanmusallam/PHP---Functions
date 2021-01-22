<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>
<div class=bg-secondary>
<div class="container">
<h1 class="text-center text-light p-5">PHP - Functions</h1>

    <table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 12vw;"># </th>
      <th scope="col">Answers</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Q 1</th>
      
<?php
// 1. Write a function to calculate the factorial of a number (a non-negative integer).
// The function accepts the number as an argument.

function QesOne($x,$y){
    if($x>0 && $y>0){
        echo "Calculate Number = ".($x+$y) ;
    }
else{
    if($x<0 && $y<0){;
    echo "non-negative integer, ".$x." , ".$y  ;}
    elseif($y<0){
      echo "non-negative integer , ".$y ;  
    }
    elseif($x<0)
    echo "non-negative integer , ".$x  ;  
}

}
echo '<td>';
QesOne(5,2);
echo "<br>";
QesOne(-5,2);
echo "</td>"
?>
    </tr>
    <tr class="table-light">
      <th scope="row">Q 2</th> 
<?php
// 2. Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no
// positive divisors other than 1 and itself.
function QesTwo($n){
    for ($i=2;$i<$n;$i++){
        if($n%$i==0)
        {
            return 0 ;
        }
    }
    return 1;
}
echo"<td>";
$a = QesTwo(5);
if($a==0){
    echo "This is not a Prime Number ".$a;
}
else
{
    echo 'This is a Prime Number '.$a;
}
echo "</td>";
?>
    </tr>
    <tr >
      <th scope="row">Q 3</th>
      <?php
// 3. Write a function to reverse a string.
function QesThree(){
$str="Coding Academy by Orange";
echo "Origin String => ".$str."<br>";
echo "Reverse => ".strrev($str);
}
echo '<td>';
QesThree();
echo "</td>";
?>

    </tr>
      <tr class="table-light">
      <th scope="row">Q 4</th>
     <?php
// 4. Write a function to sort an string array depending on the alphabetical order .
function QesFour(){
$fruits = array("Jenan", "Anghami", "Heba", "Razan","Taima","Maisam");
sort($fruits);
echo "The Alphabetical Order => ";
foreach ($fruits as $key => $val) {
    echo $val . " , ";
}
}
echo '<td>';
QesFour();
echo "</td>";


?>
    </tr>
 <tr>
      <th scope="row">Q 5</th>
     <?php
// 5. Write a PHP function that checks whether a string is all lowercase.
function QesFive($x){
    if(ctype_lower($x))
    echo 'Yes , String is all lowercase => "'.$x.'" ';
    else 
    echo 'No , String is Not all lowercase => "'.$x.'" ';;
}
echo '<td>';
QesFive("test");
echo "<br>";
QesFive("Jenan");
echo "</td>";
?>
    </tr>


     <tr class="table-light">
      <th scope="row">Q 6</th>
     <?php

// 6. Write a PHP function that checks whether a passed string is a palindrome or
// not?
// A palindrome is a word, phrase, or sequence that reads the same backward as
// forward, e.g., madam or nurses run.
function QesSix($str){ 
    if (strrev($str) == $str){   
         echo "Palindrome => ".$str;    
    } 
    else{ 
        echo "Not a Palindrome => ".$str;
    } 
} 
 echo "<td>";
QesSix("madam");
echo "<br>";
QesSix("nurses");
 echo "</td>";
?>
    </tr>
    
        <tr >
      <th scope="row">Q 7</th>
     <?php


// 7-Write a PHP program to find three numbers from an array such that the sum of
// three consecutive numbers equal to a given number.
// Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))

function QesSeven($arr , $var){
  $ass_array=array_chunk($arr, 3);
  print_r(array_chunk($arr, 3));
  $sum=0;
 for($i=0; $i< 3 ; $i++ ){
  for($j=0; $j< 3 ; $j++ ){
    $sum +=$ass_array[$i][$j];
    if($sum == $var)
     echo "<br> a match {$sum}";
 }
 $sum=0;

  }
}
 echo "<td>";
$arrayQ7 = array(2,7,7,1,8,2,7,8,7);
$numQ7 =16;
QesSeven($arrayQ7 , $numQ7);
 echo "</td>";

// $arr=array(1,3,"ss",3,5);
// $salary=array("waed"=>1000,
//               "Anas"=>2000,
//               "jenan"=>900,
//               "monther"=>600);
// $mult=array(array(1,2,4),array(4,32,2),array(3,21,5));

// foreach($salary as $k=>$soso){
// 	//if(is_array($soso)){}
// 	//if(gettype($soso) == 'array'){}
// 	if(is_array($soso)){
// 		foreach ($soso as $key => $value) {
// 			echo $key." ".$value."<br>";
// 		}
// 	}else{
// 		echo $k." ".$soso."<br>";
// 	}
// }


// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");
// $newarray1=array();
// array_push($newarray1,$array2[0],$array1[0][0],$array1[0][1]);
// echo "Array 1 : ";
// print_r($newarray1);
// $newarray2=array();
// array_push($newarray2,$array2[1],$array1[1][0],$array1[1][1]);
// echo "<br> Array 2 : ";
// print_r($newarray2);

// $multi = array(
// 				array(1,"anas","IT"),
// 				array(2,"jinan","Kitchen"),
// 				array(3,"heba","sales"),
// 				array(4,"ahmad","HR")
// 		 );
// $mutli2 = array(
// 				array(1,2,3,4),
// 				array("anas","jinan","heba","ahmad"),
// 				array("IT","Kitchen","sales","HR"),
// 		 ); 
// $id    = array();
// $names = array();
// $dept  = array();
// $id[]=

// array_push($id,$multi[0][0],$multi[1][0],$multi[2][0],$multi[3][0]);
// array_push($names,$multi[0][1],$multi[1][1],$multi[2][1],$multi[3][1]);
// array_push($dept,$multi[0][2],$multi[1][2],$multi[2][2],$multi[3][2]);
// echo "ID => ";
// foreach($id as $k=>$v){
//     echo $v." , ";
// }
// echo "<br> names => ";
// foreach($names as $k=>$v){
//     echo $v." , ";
// }
// echo " <br> dept => ";
// foreach($dept as $k=>$v){
//     echo $v." , ";
// }

// $multidimessional = array();
// array_push($multidimessional,array($mutli2[0][0],$mutli2[1][0],$mutli2[2][0] )); 
// array_push($multidimessional,array($mutli2[0][1],$mutli2[1][1],$mutli2[2][1]));
// array_push($multidimessional,array($mutli2[0][2],$mutli2[1][2],$mutli2[2][2]));
// array_push($multidimessional,array($mutli2[0][3],$mutli2[1][3],$mutli2[2][3]));   


// echo " <br> Multidimessional => ";
// foreach($multidimessional as $k=>$v){
// 	if(is_array($v)){
// 		foreach ($v as $key => $value) {
// 			echo $key." ".$value." , ";
// 		}
// 	}else{
// 		echo $k." ".$v." , ";
// 	}
// }


?>
    </tr>
    
  </tbody>
</table>
</div></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
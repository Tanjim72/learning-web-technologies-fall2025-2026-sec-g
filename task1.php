<?php

/*1. Calculate area and perimeter of Rectangle */
$length = 10;        
$width  = 5;         
$area = $length * $width;                
$perimeter = 2 * ($length + $width);    
echo "<h3>1. Area & Perimeter</h3>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";

/*2. Calculate VAT = 15% of amount */
$amount = 1000;
$vat = 0.15 * $amount;    
echo "<h3>2. VAT Calculation</h3>";
echo "VAT = $vat <br><br>";

/*3. Check if number is Odd or Even */
$num = 7;    
echo "<h3>3. Odd or Even</h3>";
if($num % 2 == 0){
   echo "$num is Even";
} else {
   echo "$num is Odd";
}
echo "<br><br>";

/* 4. Largest of three numbers */
$a = 10;
$b = 25;
$c = 15;
echo "<h3>4. Largest Number</h3>";
if ($a >= $b && $a >= $c) {
   echo "$a is the largest";
}
elseif ($b >= $a && $b >= $c) {
   echo "$b is the largest";
}
else {
   echo "$c is the largest";
}
echo "<br><br>";

/*5. Print odd numbers (10 to 100) */
echo "<h3>5. Odd Numbers from 10 to 100</h3>";
for($i = 10; $i <= 100; $i++){
   if($i % 2 != 0){
       echo $i . " ";
   }
}
echo "<br><br>";

/* 6. Search element in array*/
$arr = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;
echo "<h3>6. Search in Array</h3>";
for($i = 0; $i < count($arr); $i++){
   if($arr[$i] == $search){
       $found = true;
       break;
   }
}
if($found){
   echo "$search found in array";
} else {
   echo "$search not found in array";
}
echo "<br><br>";

/* 7. Print Shapes (Nested Loops) */
echo "<h3>7. Print Shapes</h3>";
echo "<b>Shape 1:</b><br>";
for($i = 1; $i <= 3; $i++){
   for($j = 1; $j <= $i; $j++){
       echo "*";
   }
   echo "<br>";
}
echo "<br><b>Shape 2:</b><br>";
for($i = 3; $i >= 1; $i--){
   for($j = 1; $j <= $i; $j++){
       echo $j . " ";
   }
   echo "<br>";
}
echo "<br><b>Shape 3:</b><br>";
$char = 'A';
for($i = 1; $i <= 3; $i++){
   for($j = 1; $j <= $i; $j++){
       echo $char . " ";
       $char++;
   }
   echo "<br>";
}
echo "<br>";

/* 8. 2D Array & Print Shapes */
echo "<h3>8. 2D Array Shapes</h3>";
//2D array
$arr2 = [
   [1, 2, 3, 'A'],
   [1, 2, 'B', 'C'],
   [1, 'D', 'E', 'F']
];
//numeric shape
echo "<b>Shape 1:</b><br>";
echo $arr2[0][0]." ".$arr2[0][1]." ".$arr2[0][2]."<br>";
echo $arr2[1][0]." ".$arr2[1][1]."<br>";
echo $arr2[2][0]."<br><br>";
//alphabet shape
echo "<b>Shape 2:</b><br>";
echo $arr2[0][3]."<br>";
echo $arr2[1][2]." ".$arr2[1][3]."<br>";
echo $arr2[2][1]." ".$arr2[2][2]." ".$arr2[2][3]."<br>";
?>
<?php
$a1= Array(
Array(1,2),
Array(4,5)
);
$a2 = Array(
Array(1,2),
Array(4,5)
);
$result = array();
for($i = 0 ; $i<=1;$i++){
for($j=0;$j<=1;$j++){
$result[$i][$j]=0;
for($k=0;$k<=1;$k++){
$result[$i][$j]+=$a1[$i][$k]  * $a2[$k][$j];
}
}
}
echo "The Addition of 2 matrix is : </br>";
for($i = 0 ; $i<=1;$i++){
for($j=0;$j<=1;$j++){
echo " ".$result[$i][$j];
}
}
?>
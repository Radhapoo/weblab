<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ',$allTheStates);
$i=0;
foreach($states1 as $state){
if(preg_match('/xas$/',($state))){
$statesArray[$i] = ($state);
$i=$i+1;
print "The States that ends in xas:\n".$state;
}
}
foreach($states1 as $state){
if(preg_match('/^k.*s$/i',($state))){
$statesArray[$i] = ($state);
$i=$i+1;
echo "The States that begins with k and ends in s:\n" .$state;
}
}
foreach($states1 as $state){
if(preg_match('/^M.*s$/',($state))){
$statesArray[$i] = ($state);
$i=$i+1;
print "The States that begins with M and ends in s:\n" .$state;
}
}
foreach($states1 as $state){
if(preg_match('/a$/',($state))){
$statesArray[$i] = ($state);
$i=$i+1;
print "The States that ends in a:\n" .$state;
}
}
foreach ($statesArray as $element => $value){
print("\n" . $value . "is the element".$element);
}
?>
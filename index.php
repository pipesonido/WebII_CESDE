<?php
$myArray=['HTML', 'CSS', 'PHP'];
//Acces to specific position
echo $myArray[1];
//Other way to create an array
$myArray2=array('CSS','Javascript','Python',6.5);
echo '<br>'.$myArray[2];
echo '<br>';
print_r($myArray2);
echo '<br>';
var_dump($myArray2);
//Adding elements to array
$myArray[]=20;
//other way to add elements to array
array_push($myArray,'Java',30);
echo'<br>';
var_dump($myArray);
echo'<br>';
//Associative arrays
$myArray3=array(
    'name'=>'Juan',
    'lastname'=>'Zabala',
);
print_r($myArray3);
echo $myArray3['name'];
echo '<br>';
foreach($myArray as $element){
    echo '<li>' . $element . '<br>';
}
//Get index using foreach
foreach($myArray as $key=> $element){
    echo '<li>' . $element . ',position: '. $key. '</li>';
}

?>
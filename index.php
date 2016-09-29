<?php
Echo 'Hello World';
  // this is how you print stuff in php
  $myvar = 'Some Text I want to store in a variable';
// this is how you store stuff in a variable
  echo '$myvar';
  echo '<br>';
  echo "$myvar";
 // this is an example of of the difference between single and double quotes


// this is an example of an array
$myarray = array();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);

$myAssoc = array('value1' => $myarray, 'value2' => $myarray);
print_r($myAssoc);



?>

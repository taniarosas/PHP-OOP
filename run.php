	<!--Lecture 3 -->
	<!-- Example 1 is_boolean-->
<?php
$a = false;
$b = 5;

if (is_bool($a) === true) {
    echo "Yes, this is a boolean. ";
}

if (is_bool($b) === false) {
    echo "No, this is not a boolean. ";
}
?>
	<!-- Example 2 is_null-->
<?php  
$var_name = TRUE;  
if (is_null($var_name))  
{  
echo 'Variable is  NULL';  
}  
else  
{  
echo '<br>Variable is not NULL </br>';  
}  
?>  

	<!-- Example 3 is_array-->
<?php
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
?>
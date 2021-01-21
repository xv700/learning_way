<br>PHP 数组<br>

数值数组 - 带有数字 ID 键的数组<br>

<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


<br>关联数组 - 带有指定的键的数组，每个键关联一个值<br>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
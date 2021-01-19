<br>
while 循环
<br>
<?php
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}
?>

<br>
do...while 语句
<br>
<?php
$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);
?>

<br>
PHP 循环 - For 循环
<br>
<?php
for ($i=1; $i<=5; $i++)
{
    echo "数字为 " . $i . PHP_EOL;
}
?>

<br>
foreach 循环
<br>
<?php
$x=array("Google","Runoob","Taobao");
foreach ($x as $value)
{
    echo $value . PHP_EOL;
}
?>
<br>
foreach 循环 2
<br>
<?php
$x=array(1=>"Google", 2=>"Runoob", 3=>"Taobao");
foreach ($x as $key => $value)
{
    echo "key  为 " . $key . "，对应的 value 为 ". $value . PHP_EOL;
}
?>

类型、类型比较<br>
<?php
echo '0 == false: ';
var_dump(0 == false);

echo "<br>";

echo '0 === false: ';
var_dump(0 === false);

echo "<br>";

echo '0 == null: ';
var_dump(0 == null);

echo "<br>";

echo '0 === null: ';
var_dump(0 === null);

echo "<br>";

echo 'false == null: ';
var_dump(false == null);

echo "<br>";

echo 'false === null: ';
var_dump(false === null);

echo "<br>";

echo '"0" == false: ';
var_dump("0" == false);

echo "<br>";

echo '"0" === false: ';
var_dump("0" === false);

echo "<br>";

echo '"0" == null: ';
var_dump("0" == null);

echo "<br>";

echo '"0" === null: ';
var_dump("0" === null);

echo "<br>";

echo '"" == false: ';
var_dump("" == false);

echo "<br>";

echo '"" === false: ';
var_dump("" === false);

echo "<br>";

echo '"" == null: ';
var_dump("" == null);

echo "<br>";

echo '"" === null: ';
var_dump("" === null);
?>
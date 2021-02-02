
<div>
<table style="width: 562px" border="0" align="left">
<tbody>
<tr style="background-color: rgba(93, 161, 161, 1)">
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">数据类型</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">描述</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">boolean(布尔型)</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">布尔型是最简单的数据类型，只有两个值 false(假) 和true(真)</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">string(字符串型)</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">字符串就是连续的字符序列，如 ehco "string";</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">integer(整型)</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">整型数据类型只能包含整数，这些数据类型可以是负数或者正数</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">folat(浮点型)</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">浮点型类型用于存储数字，和整型不同的是浮点型可以有小数点</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">array（数组）</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">一组相同类型的集合</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">object（对象）</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">对象是一个实力，使用new命令创建一个对象</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">resource（资源）</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">资源是一种特殊的变量，保存在外部资源的一个应用，资源是通过函数来进行建立的</span></td>
</tr>
<tr>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">null（ 空白）</span></td>
<td style="text-align: center"><span style="color: rgba(0, 0, 0, 1)">特殊的值，表示变量没有值，任何变量的初始值都是null</span><br data-filtered="filtered"><br data-filtered="filtered"></td>

</tr>
</tbody>
</table>

</div>

https://www.cnblogs.com/maxche/p/6665436.html   
https://www.php.cn/php-weizijiaocheng-360747.html   
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
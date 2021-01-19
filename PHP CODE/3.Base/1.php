<?php
class MyDestructableClass {
   function __construct() {
       print "start构造函数\n";
       $this->name = " MyDestructableClass";
   }

  function getTitle(){
     echo $this->name;
  }

   function __destruct() {
       print "销毁 " . $this->name . "over\n";
   }
}

$obj = new MyDestructableClass();

echo "<br>".$obj->getTitle()."测试输出<br>"
?>
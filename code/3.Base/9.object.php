<?php
class Site {
  /* 成员变量 */
  var $url;
  var $title;
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}

$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
?>
<br>
https://www.runoob.com/php/php-oop.html


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
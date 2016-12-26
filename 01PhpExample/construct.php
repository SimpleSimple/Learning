<?php

class A {
    public $name;
    public $age;
    public $size = '36D';

    //使用serialize 将一个对象串行化为字符串的时候自动调用
    public function __sleep() {
        return array('name', 'age', 'test', 'size');
    }

    public function __wakeup() {
        echo "我醒了...";
    }

    // 使用 new关键字 得到对象的时候自动调用
    public function __construct() {
        echo "实例化的构造函数<br/>";
    }
}

// $p       = new A();
// $p->name = "Groot";
// $p->age  = 10;
// $p->size = "40G";

// print_r($p);

// $obj=serialize($p);
// echo $obj;

class myName {
    public function __construct($myName) {
        //连续两个下划线
        echo ("我的名字是：$myName<br>");
    }
}
$name1 = new myName("小猫");
$name2 = new myName("小狗");
$name3 = new myName("小马");
echo '-------------------分割线-----------------------';

class myName2 {
    public function construct($myName) {
        echo ("我的名字是：$myName<br>");
    }
}
$name1 = new myName2("小猫");
$name2 = new myName2("小狗");
$name3 = new myName2("小马");
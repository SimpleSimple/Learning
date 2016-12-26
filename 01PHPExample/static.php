<?php

class User {
    private static $count = 0;

    public function __construct() {
        self::$count = self::$count + 1; //使用self::关键字访问当前类的静态成员
    }

    public function getCount() {
        return self::$count;
    }

    public static function sayName() {
        echo 'sayName';
    }
}

$user1 = new User(); //实例化
echo 'now here have ' . $user1->getCount() . ' user';
echo '<br/>';

$user2 = new User(); //实例化
echo 'now here have ' . $user2->getCount() . ' user';
echo '<br/>';

unset($user2);
echo 'now here have ' . $user1->getCount() . ' user';
echo '<br/>';

User::sayName();
echo '<br/>';

/**
 *
 */
class Product {
    private $count = 0;

    public function __construct() {
        $this->count = $this->count + 1;
    }

    public function getCount() {
        return $this->count;
    }
}

$product = new Product();
$count   = $product->getCount();
echo '现在这里总共有 ' . $count . ' 产品';
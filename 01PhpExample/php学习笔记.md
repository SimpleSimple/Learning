### 静态（Static）
- 使用self::关键字访问当前类的静态成员
```
class User {
    private static $count = 0;

    public function __construct() {
        self::$count = self::$count + 1; //使用self::关键字访问当前类的静态成员
    }
}
```

### :: vs. ->，self vs. $this
- 如果成员变量或方法被声明const或static，必须使用::访问
- 如果成员变量或方法没有声明const或static，必须使用->访问
- 如果在类里面访问一个const或static的变量或方法，就需要使用self::进行访问
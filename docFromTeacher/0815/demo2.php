<?php

namespace _0815;

/**
 * 类的扩展/抽象/最终
 * 1. 可继承成员: protected
 * 2. extends: 类成员的来源
 * 3. parent: 父类引用
 */

class Person
{
    // 1. 属性
    // public: 公共成员, 当前类, 类外部
    // public string $email = 'a@qq.com';
    // private: 私有成员, 仅限当前类,类外部不可见
    private int $id = 10;
    // protected: 受保护的, 用在当前类,以及他的子类中, 外部不可见
    protected string $name;

    // public > protected > private
    // 类中,类外,子类: public
    // 类中,子类: protected
    // 类中: private

    // 2. 方法
    public function __construct($name)
    {
        $this->name = $name;
    }

    // 自定义方法
    protected function getInfo(): string
    {
        return $this->name;
    }
}

// 继承/扩展一个类
class Stu extends Person
{
    // extends: 相当于把父类代码复制到当前类中(除Private成员外)
    // protected string $name;
    // public function __construct($name)
    // {
    //     $this->name = $name;
    // }
    // protected function getInfo(): string
    // {
    //     return $this->name;
    // }


    // 只需要扩展父类中的:"属性和方法"

    // 1. 属性扩展
    // 之前
    // protected string $name;
    // 扩展的
    private string $lesson;
    private int $score;


    // 2. 方法扩展
    // 构造方法
    public function __construct($name, $lesson, $score)
    {
        // parent: 引用父类
        parent::__construct($name);
        $this->lesson = $lesson;
        $this->score = $score;
    }

    // protected -> public
    public function getInfo(): string
    {
        return  parent::getInfo() . '同学, (' . $this->lesson . ' ) , 成绩: ' . $this->score .'<br>';
    }
}


$stu = new Stu('小张', 'php', 90);
echo $stu->getInfo() ;


// 2. 禁用父类, 仅允许通过它的子类来访问父类成员
// 把当前类,声明为"抽象类": abstract
// 如果类中有抽象方法,则这个类必须声明为抽象类
abstract class Demo1
{
    public string $name = 'admin';

    // 如果某个方法没有具体实现,应该声明成抽象方法
    abstract public static function getInfo($name);
}

class Demo2 extends Demo1
{
    // 在子类中, 必须将父类中的抽象方法实现了
    public static function getInfo($name)
    {
        return 'Hello, ' .$name;
    }
}
echo Demo2::getInfo('朱老师');

// 抽象类: 强制要求必须继承才能用

// 最终类: 禁止继承,直接用
// final: 不能扩展了
final class Demo3
{
}

// class Demo4 extends Demo3
// {
// }

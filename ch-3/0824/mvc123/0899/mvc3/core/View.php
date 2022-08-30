<?php

namespace core;

// 视图类
class View
{
    // 1. 模板变量容器
    protected array $data = [];

    // 2. 模板赋值
    public function assign(string $key, $value)
    {
        $this->data[$key] = $value;
    }
    // 3. 模板渲染
    public function render(string $path, array $data = [])
    {
        // 支持模型赋值与模板渲染同步进行
        // 如果传入了第二个参数,模板变量,则先执行赋值
        if ($data) {
            foreach ($data as $key=>$value) {
                // 调用本类的assign()
                $this->assign($key, $value);
            }
        }
        // 将模板变量解析到当前作用域中
        extract($this->data);
        // 加载模板
        file_exists($path) ? include $path : die('模板不存在');
    }
}

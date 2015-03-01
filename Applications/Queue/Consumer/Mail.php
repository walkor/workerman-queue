<?php
namespace Consumer;

/**
 * 消费者逻辑
 * @author walkor<walkor@workerman.net>
 */
class Mail
{
    /**
     * 模拟慢任务
     * 数据包格式： {"class":"Mail", "method":"send", "args":["xiaoming","xiaowang","hello"]}
     * @param string $from
     * @param string $to
     * @param string $content
     * @return void
     */
    public function send($from, $to, $content)
    {
        // 作为例子，代码省略
        sleep(5);
        echo "from:$from to:$to content:$content     mail send success\n";
    }
    
    public function read()
    {
        // ..
    }
}
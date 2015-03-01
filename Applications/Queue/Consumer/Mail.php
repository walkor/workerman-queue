<?php
namespace Consumer;

/**
 * 消费者逻辑
 * @author walkor<walkor@workerman.net>
 */
class Mail
{
    public function send($from, $to, $content)
    {
        // 作为例子，代码省略
        sleep(1);
        echo "mail send success\n";
    }
    
    public function read()
    {
        // ..
    }
}
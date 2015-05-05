<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
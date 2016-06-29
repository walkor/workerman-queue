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
// 创建于队列服务的socket连接
$client = stream_socket_client("tcp://127.0.0.1:1236", $err_no, $err_msg, 5);
if(!$client)
{
    exit($err_msg);
}
// 一个邮件任务
$message = array(
    'class' => 'Mail',
    'method' => 'send',
    'args' => array('xiaoming', 'xiaowang', 'hello'),
);
// 数据末尾加一个换行，使其符合Text协议。使用json编码
$message = json_encode($message)."\n";
// 向队列发送任务，让队列慢慢去执行
fwrite($client, $message);
// 队列返回的结果，这个结果是立即返回的
echo fread($client, 8192);

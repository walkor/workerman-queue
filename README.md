workerman-queue
=========

一个简单的消息队列，基于Linux sysv 队列实现。

需要安装 sysvmsg扩展

## 注意，默认sysv队列的存储空间比较小，可以通过设置内核参数加大sysv队列的空间

// 此文件可以用于查看和修改在队列中排队消息的数量的上界

/proc/sys/fs/mqueue/msg_max

// 此文件可以用于查看和修改消息大小最大值的上界

/proc/sys/fs/mqueue/msgsize_max

// 此文件可以用于查看和修改整个系统上可创建的消息队列的数量的限制值

/proc/sys/fs/mqueue/queues_max


## run

进入workerman根目录

debug模式运行

php start.php start

daemon模式运行

php start.php start -d



## test
php Applications/Queue/client_demo.php
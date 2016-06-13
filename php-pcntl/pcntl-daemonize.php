<?php
    function daemonize()
    {
	$pid = pcntl_fork();
	if ($pid == -1)
	{
	die("fork(1) failed!\n");
	}
	elseif ($pid > 0)
	{
	//让由用户启动的进程退出
	exit(0);
	}

	//建立一个有别于终端的新session以脱离终端
	posix_setsid();

	//此时子进程已经成为无控制终端的会话组长进程，但有可能再次打开一个控制终端；再次fork，变成非会话组长进程即可。
	$pid = pcntl_fork();
	if ($pid == -1)
	{
	die("fork(2) failed!\n");
	}
	elseif ($pid > 0)
	{
	//父进程退出, 剩下子进程成为最终的独立进程
	exit(0);
	}
    }

    daemonize();
    sleep(1000);
?>

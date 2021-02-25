<?php
$file = fopen('test.txt','a+');
if(flock($file,LOCK_EX)){  //加锁

    var_dump(fwrite($file,"写入内容"));

    flock($file,LOCK_UN);//解锁
}
fclose($file);
///hiuhiu
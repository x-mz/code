<?php
    include 'h.php';
	lj();
	$p=$_POST['name'];
	$q=$_POST['password'];
	$value=array("$p", "$q");
	$xm=array("name","password");
	$a=c($p,$q);
    if($a==2){
		echo '恭喜您登陆成功，敢达中文情报站欢迎您！';
	}
	else if($a==1){
		echo '登录失败，您可以尝试：';
		echo "<a href='add.html'>注册</a>";
		echo "<a href='login.html'>登录</a>";
	}
	else if($a==0){
		echo 'a顶顶顶顶顶顶顶';
		echo "<a href='add.html'>注册</a>";
		echo "<a href='login.html'>登录</a>";
	}
    js();
		
	
?>
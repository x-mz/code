<?php
    function lj(){
		$con = mysql_connect("localhost","mzm","Mzm20050527!");
        if (!$con)
        {
            die('devasasdfdf: ' . mysql_error());
        }
        mysql_select_db("my_db", $con);
	}
	function js(){
		$con = mysql_connect("localhost","mzm","Mzm20050527!");
		mysql_close($con);
	}
    function z($table,$xm,$value){
		$z="INSERT INTO '$table' ($xm)VALUES($value)";
		if (!mysql_query($z))
        {
            die('Error: ' . mysql_error());
        }
	}
	function s($table,$value,$xm){
		$x="gundam."."$table";
		$z="DELETE FROM gundam.user WHERE  '$xm'='$value'";
		if (!mysql_query($z))
        {
            die('Error: ' . mysql_error());
        }
	}
	function c($p,$q){
		$x=0;
		$cha=mysql_query("SELECT * FROM mzm.user where name= '{$p}'");
        while($row = mysql_fetch_array($cha))
        {
            if($row["password"]==$q){
                $x=3;
            }else{$x=1;}
		
        }	
		if($x==3){
				return 2;
			}else if($x==1){
				return 1;
		}
		else if($x==0){
				return 0;
		}
	}
	function g($table,$value1,$xm,$value2){
		$x="gundam."."$table";
		$z="UPDATE '$x' SET '$xm' = '$value2' WHERE '$xm' = '$value2' ";
		if (!mysql_query($z))
        {
            die('Error: ' . mysql_error());
        }
	}


?>
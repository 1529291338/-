
		<?php
			header("content-type","text/html;charset=utf-8");

			//1、接受客户端的数据（用户输入的数据）
			$username = $_REQUEST['idaccount'];
			//2、数据保存在数据库中
			//1）、建立连接（搭桥）
			$conn = mysql_connect("localhost","root","qianfeng");
			
			//2）、选择数据库（找目的地）
			mysql_select_db("yonghuxinxi",$conn);
			
			//3）、传输数据（过桥）
			//insert语句
			
			$sqlstr = "select * from yonghu where username='".$username."'";
			$result = mysql_query($sqlstr,$conn);
			$query_num =mysql_num_rows($result);

			
			
			//4）、关闭连接（拆桥）
			mysql_close($conn);
			
			//三、返回
			if($query_num==0){
				echo "0";
			}else{
				echo "2";
			}
		?>

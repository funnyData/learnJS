<?php
	@header('Content-type: text/html;charset=utf-8');
/*
require_once('phpbase/nik/dao/RedisBase.php');
require_once('phpbase/nik/libraries/Ng_Conf.php');
require_once('phpbase/nik/libraries/Ng_Timer.php');
require_once('phpbase/nik/libraries/Ng_Log.php');

function isAllow(){
        $group = array(
                "1000539",
		"1000845",
		"1000128",
		"1000780",
		"1000111",
        );

        $uid = getUid();
        foreach($group as $value) {
                if($value == $uid)
                return true;
        }
        return false;
}
function getUid(){
        if(!isset($_COOKIE['nguss'])){
            return 0;
        }   
        $sessionId = $_COOKIE['nguss'];
        $redis = Nik_Dao_RedisBase::GetInstance();
        $res = $redis->call_interface(
             Nik_Dao_RedisBase::GET,
             array(
                 'reqs' => array(
                      array(
                        'key'   => 'session'.$sessionId,
                     )   
                 )   
             )   
        );  
        if($res['errno'] != 0){ 
            return 0;
        }   
        return intval($res['result']["session$sessionId"]);
}
if(!isAllow()) {
	echo "没有权限";
	return;
}
*/
    /*
$mysql_server_name="10.132.38.172"; //数据库服务器名称
    $mysql_username="ng_bone_w"; // 连接数据库用户名
    $mysql_password="adgjlzcbm"; // 连接数据库密码
    $mysql_database="bone"; // 数据库的名
*/
    $mysql_server_name="127.0.0.1"; //数据库服务器名称
    $mysql_username="root"; // 连接数据库用户名
    $mysql_password="chendong"; // 连接数据库密码
    $mysql_database="bone"; // 数据库的名字
    
    // 连接到数据库
    $conn=mysql_connect($mysql_server_name, $mysql_username,
                        $mysql_password);
    mysql_select_db($mysql_database);
    mysql_query('SET NAMES utf8');

    //$mydate="2014-09-10";
    ?>
   <form action="part_time.php" method="get">
   请输入您的手机号: <input type="text" name="phone">
   <input type="submit" value="查询">
   <label>输入格式：138XXXXXXXX</label>
   </form> 


    <?php

    $phone = $_GET["phone"];
    if ($phone == '') {
	    
    }
    /*
$year = substr($mydate, 0,4);
    $month = substr($mydate, 4,2);
    $date = substr($mydate, 6,2);
*/
    // echo $year." ";
    // echo $month." ";
    // echo $date." ";
    // $mydate = $year."-".$month."-".$date;

    //var_dump($mydate);
    //echo $mydate;
    //$mydate="2014-09-11";
    //echo 'test';                       
     // 从表中提取信息的sql语句
    /*
if($mydate != "--"){
      $strsql="select tblUcloud.uid,tblUser.account,tblUcloud.uname,tblUcloud.ext as studentPhone,tblUcloud.ext as UserPhone,tblUcloud.email,tblUser.time from tblUcloud left join tblUser on tblUcloud.uid = tblUser.uid where time like'%".$mydate."%'order by uid desc ";
      $ucloudSql = "select count(*) from '".$strsql."'";
      $result=mysql_db_query($mysql_database, $strsql, $conn);
      $num_rows = mysql_num_rows($result);
      //echo $num_rows;
      // 获取查询结果
      $row=mysql_fetch_row($result);
      

       echo '完成注册二级页面的人数为：'.$num_rows, '<br /><br />';
       //var_dump($row1[0]);
       // $number = mysql_fetch_array($result);
       // var_dump($number);
       // $count = count($number);
       //$result1=mysql_db_query($mysql_database, $ucloudSql, $conn);
       //$row1=mysql_fetch_row($result1);
       
       //echo '完成注册二级页面的人数为：'.$count, '<br /><br />';
    }
*/
     
      $strsql="select tblUcloud.uid,tblUser.account,tblUcloud.uname,tblUcloud.ext as studentPhone,tblUcloud.ext as UserPhone,tblUcloud.email,tblUser.time from tblUcloud left join tblUser on tblUcloud.uid = tblUser.uid order by uid desc ";
      $ucloudSql="select count(*) from tblUcloud";
      $result=mysql_query($strsql, $conn);
      // 获取查询结果
       $row=mysql_fetch_row($result);
       $result1=mysql_query($ucloudSql, $conn);
       $row1=mysql_fetch_row($result1);
       //echo '完成注册二级页面的人数为：'.$row1[0], '<br /><br />';
    
    
    // 执行sql查询
    //$strsql="select * from tblUser";
    
    
    //print_r($row);

    /*$str='{"email":"1519893520@qq.com","age":25,"education":"\u7855\u58eb","company":"\u65e5\u4fe1\u8bc1\u5238","stockExp":"2\u5e74\u4ee5\u4e0b","preference":"\u7a33\u5065\u578b","stockTime":"1\u4e2a\u6708\u4ee5\u5185","validation":"18883331900","askCount":0,"replyCount":0,"commentCount":0,"commentReplyCount":0,"replyDiscussCount":0,"fansCount":0,"followUCount":30,"followSCount":3,"coverStockName":"","coverStock":"","fields":"","desc":"","average":""}';

    $json=json_decode($str,true);*/
    
     
    /*
echo '<font face="verdana">';
    echo '<table border="1" cellpadding="1" cellspacing="2">';
*/
    
    // 显示字段名称
    /*
echo "</b><tr></b>";
    for ($i=0; $i<7; $i++)
    {
      echo '<td bgcolor="#cccccc"><b>'.
      mysql_field_name($result, $i);
      echo "</b></td></b>";
    }
*/

    	/*echo '<td bgcolor="#000F00"><b>'.
      	mysql_field_name($result, 0);
      	echo "</b></td></b>";
      	echo '<td bgcolor="#000F00"><b>'.
      	mysql_field_name($result, 1);
      	echo "</b></td></b>";
      	echo '<td bgcolor="#000F00"><b>'.
      	mysql_field_name($result, 2);
      	echo "</b></td></b>";
      	echo '<td bgcolor="#000F00"><b>'.
      	mysql_field_name($result, 3);
      	echo "</b></td></b>";*/
    echo "</tr></b>";
    // 定位到第一条记录
    mysql_data_seek($result, 0);
    // 循环取出记录
    $sum = 0;
    while ($row=mysql_fetch_row($result))
    {
    	
    	$json=json_decode($row[3],true);
		$json1=json_decode($row[4],true);
		if ($json['validation']==$phone) {
    	//if ($json['validation']) {
    	/*
echo "<tr></b>";
      	echo '<td bgcolor="white">';
      	echo $row[0];
      	echo '</td>';
      	echo '<td bgcolor="white">';
      	echo $row[1];
      	echo '</td>';
      	echo '<td bgcolor="white">';
      	echo $row[2];
      	echo '</td>';
        echo '<td bgcolor="white" width="15">';
        echo $json['validation'];
        echo '</td>';
		echo '<td bgcolor="white">';
        echo $json1['tel'];
        echo '</td>';
        echo '<td bgcolor="white">';
      	echo $row[5];
      	echo '</td>';
	  	echo '<td bgcolor="white">';
        echo $row[6];
        echo '</td>';
*/
        $sum = $sum + 1;
    	//}
		}
      	
    }
   
    /*
echo "</table></b>";
    echo "</font>";
*/
    
    echo $sum;
    // 释放资源
    mysql_free_result($result);
    // 关闭连接
    mysql_close($conn);  



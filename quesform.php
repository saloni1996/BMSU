<?php

	$con= mysqli_connect("localhost","root","","rti");
	if(!$con)
		die("Can not connect:" . mysql_error());
	session_start();
	$c=$_SESSION['id'];
	$b=$_SESSION['qu'];
	$_SESSION['v']=$b;
	$_SESSION['q']=1;
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	
	while( $b!=0)
	{		
		$qno="q_no".$b;
		$ques="ques".$b;
		$map="map".$b;
		$date_s="date_s".$b;
		
		$qno1=$_POST[$qno];
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$date_s1=$_POST[$date_s];
		$d1=strtotime($_POST[$date_s]);
		
		$sql="INSERT INTO t2 (id,q_no,ques,map,date_sent) 
		  VALUES('$c','$qno1','$ques1','$map1','$date_s1')";
		mysqli_query($con,$sql);	
		$b--;
	}
	mysqli_close($con);
if(isset($_POST['save']))
{
	include 'new_prev.php';
}
if(isset($_POST['reply']))
{
	include 'gen_query_pdf.php';
}
?>
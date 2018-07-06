<?php
$hostname='localhost';
$username='root';
$password='';


try{
    $dbh=new PDO("mysql:host=$hostname;dbname=student",$username,$password);
    echo 'Connected To DataBase<br/>';

    $sql="Select * From studentinfo";
    foreach(($dbh->query($sql))as $row)
	{
		echo $row["Id"]." - ".$row["Name"]."-".$row["Class"]."-".$row["Age"]."<br/>";
	}
    $dbh=null;
}
catch(Exception $e)
{
    echo "ERROR".$e.getMEssage();
}
?>
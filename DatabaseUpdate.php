<?php
$hostname='localhost';
$username='root';
$password='';


try{
    $dbh=new PDO("mysql:host=$hostname;dbname=student",$username,$password);
    echo 'Connected To DataBase<br/>';

    $sql="Update studentinfo set Name='Moto' where Id =1";
    if(($dbh->query($sql)))
	{
		//echo $row["Id"]." - ".$row["Name"]."-".$row["Class"]."-".$row["Age"]."<br/>";
        echo'Record are Successfully Updated';
    }
    else{
        echo'No Updated';
    }
    $dbh=null;
}
catch(Exception $e)
{
    echo "ERROR".$e.getMEssage();
}

?>
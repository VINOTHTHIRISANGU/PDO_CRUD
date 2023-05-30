<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
try
{
    $PNO=$_POST['pno'];
    $PASS=$_POST['pass'];
    $con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="insert into pdo2(PNO,PASS)values(:PNO,:PASS)";
$stmt=$con->prepare($query);
if($stmt->execute([':$PNO'=>$PNO,':$PASS'=>$PASS]))
{
$id=$con->LastInsertId();
echo"the id:".$id."inserted successgfully";
}
else
{
    echo"<script>alert(' not update successfully')</script>"; 
}
}
catch(PDOException $e)
{
    echo $e->getmessage();
}
?>
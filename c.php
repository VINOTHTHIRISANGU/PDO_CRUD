<?php
$server="localhost";
$uname="root";
$pwd="";
$dbname="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$dbname) or die('db not connected');
$ename=$_POST['ename'];
$fname=$_FILE['fpath']['name'];
$temp=$_FILE['fpath']['tmp_name'];
$fsize=$_FILE['fpath']['size'];
$fdir="upload";
$fpath=$fdir.$fname;
if(move_uploaded_file($temp,$fpath))
{
$query="insert into fileupload(ename,fpath) values ('$ename','$fpath')";
$res=mysqli_query($con,$query);
echo"<script>alert('data saved')</script>;";
}
else
{
echo"<script>alert('data not saved')</script>;";

}
?>


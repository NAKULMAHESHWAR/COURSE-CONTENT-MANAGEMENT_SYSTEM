<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
h1{
text-align:center;
color:#3366CC;
}
.btn{
font
-size:16px;
padding:6px; }
form{
margin:100px; }
td{
font
-size:22px;
border:none;
padding:10px;
text
-align:left
}
input[type=text]{
padding:5px; }
input[type=date]{
padding:5px; }
button{
font
-size:20px;
padding:2px;
margin:30px; }
</style>
<script language="javascript">
function submit_this() {

var str;
str='';
if (document.form1.title.value=="")
{ str="Please Fill course Title.\n" + str;}
if (document.form1.COURSE_NAME.value=="")
{ str="Please Fill Course Name.\n" + str; }
if(document.form1.from_date.value==""){
str="Please Fill From date.\n" + str;
}
if(document.form1.to_date.value==""){
str="Please Fill To date.\n" + str;
}
if(str!='')
{ alert(str);
return false;
}
}
</script>
</head>

<body>
<?php
session_start();
$IC_NO = $_SESSION['IC_NO'];
$NAME = $_SESSION['NAME'];
if($IC_NO == "")
{
echo "<br><br><div align='center'><img src=images/ico_error.gif width=16
height=16> <font color='red'>Session Expired! Redirecting you to Login
page!!</font></div>";
echo "<meta http-equiv=refresh content=1;url=login.php>";
}
?>
<form action="#" method="post" enctype="multipart/form-data" name="form1">
<h1> Upload Course Content</h1>
<table border=1 align="center" width="40%" bgcolor="#F4FAFD" bordercolor="blue">
<!--<tr>
<td align="left">Course id:</td>
<td align="left" >&nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="COURSE_ID" ></td>
</tr>
-->
<tr>
<td align="left" >Name of course:</td>
<td >&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="COURSE_NAME" /> </td>

</tr>
<tr>
<td>Venue:</td>
<td>&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="venue" /> </td>
</tr>
<tr>
<td>From Date:</td>
<td>&nbsp; &nbsp; &nbsp; <input type="date" name="from_date" /> </td>
</tr>
<tr>
<td>To Date:</td>
<td>&nbsp; &nbsp; &nbsp; <input type="date" name="to_date" /> </td>
</tr>
<tr>
<td>Title: </td>
<td>&nbsp; &nbsp; &nbsp; <input type="text" name="title" /> </td>
</tr>
<tr>
<td>Upload : </td>
<td>&nbsp; &nbsp; &nbsp; <input type="file" name="upload" /> </td>
</tr>
<?php
if(isset($_FILES['upload'])){
$file_name=$_FILES['upload']['name'];
$file_tmp=$_FILES['upload']['tmp_name'];
$newfilename = date('Y-m-d-H-i-s').'-'.$IC_NO.'-
'.$_FILES["upload"]["name"];

move_uploaded_file($file_tmp,"C:\wamp64\www\course_data_mgmt\DataFiles/".$newfilena
me);
}
?>
<td>&nbsp;</td>
<td>
<button type="submit" name="adduploads" id="adduploads" value="createzip"
style="background-color:#00E600" onClick=" return submit_this()">Submit </button></td>
</tr>
<TD>
<a href="menu.php" > back</a>
</td>
</table>
</form>
<?php
$con_sql = mysqli_connect("localhost","root","","course_data_mgmt");
if(mysqli_connect_errno())
echo "Failed to connect to MySQL: " . mysqli_connect_error();
// echo "successfully";
?>
<?php
if(isset($_POST['adduploads']))
{
$COURSE_NAME=$_REQUEST['COURSE_NAME'];

$VENUE=$_REQUEST['venue'];
$FROM=$_REQUEST['from_date'];
$TO=$_REQUEST['to_date'];
$COURSE_TITLE=$_REQUEST['title'];
$course_file=$_REQUEST['FILE_NAME'];
$LOCATION = "course_data_mgmt\DataFiles";
$newfilename = date('Y-m-d-H-i-s').'-'.$IC_NO.'-
'.$_FILES["upload"]["name"];
move_uploaded_file($_FILES['upload']['tmp_name'],
$LOCATION.$newfilename);
$FILE_NAME = $newfilename;
//echo $COURSE_NAME;
// echo $COURSE_ID;
//echo $course_file;
$sql="INSERT INTO course_entry
VALUES(COURSE_ID,'$COURSE_NAME','$VENUE','$FROM','$TO','$COURSE_TITLE',
'$LOCATION','$FILE_NAME','0','$IC_NO','$NAME','')";
$qry_insert_exe = mysqli_query($con_sql,$sql);
/*if($qry_insert_exe){
echo "data inserted";
}*/
if($qry_insert_exe)
{
$insertflag = 1;
}
else
{

echo "Query Error: ". $sql . "<br>" . mysqli_error($con_sql);
?><div align="center"><input type="button" name="back"
value="BACK" onClick="window.location.href='add_uploads.php'" /></div><?php
exit;
}
mysqli_close($con_sql);
}
?>
</body>
</html>

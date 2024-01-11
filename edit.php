<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Untitled Document</title>
<style>
td{
width:14%;
}
</style>
</head>
<?php
session_start();
$IC_NO = $_SESSION['IC_NO'];
$NAME = $_SESSION['NAME'];
$ROLE=$_SESSION['ROLE'];
?>
<?php
$con_sql = mysqli_connect("localhost","root","","course_data_mgmt");
if(mysqli_connect_errno())
echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>
<?php
//Edit Uploads Block Begin
$insertflag = 0;
if (isset($_GET['COURSE_ID']))
{
$COURSE_ID=$_GET['COURSE_ID'];

$ADD_BY_ICNO = $IC_NO;
$ADD_BY_ENAME = $NAME;
$DATE_ADDED = date("y-m-d");
//$COURSE_NAME = $_GET['COURSE_ID'];
$editflag = 0;
//$COURSE_ID = str_replace("'","'", $_POST['COURSE_NAME'.COURSE_ID]);
$COURSE_NAME =
str_replace("'","''",$_POST['COURSE_NAME'.$COURSE_ID]);
$VENUE = str_replace("'","''",$_POST['VENUE'.$COURSE_ID]);
$FROM_DT = date("Y-m-d",
strtotime($_POST['FROM_DT'.$COURSE_ID]));
$TO_DT = date("Y-m-d", strtotime($_POST['TO_DT'.$COURSE_ID]));
$TITLE1= str_replace("'","'",$_POST['TITLE'.$COURSE_ID]);
echo $FROM_DT;
$updtqry="COURSE_NAME='$COURSE_NAME',
VENUE='$VENUE',COURSE_TITLE='$TITLE1',FROM_DT='$FROM_DT',
TO_DT='$TO_DT'";
//$temp = explode(".", $_FILES["FILE_NAME"]["name"]);
//date_default_timezone_set('Asia/Kolkata');
$qry_insert = "UPDATE course_entry set ". $updtqry ." where
COURSE_ID='$COURSE_ID'";
$qry_insert_exe = mysqli_query($con_sql,$qry_insert);
//Check whether the query was successful or not
if($qry_insert_exe)
{
$editflag = 1;
}
else
{
}
echo "Query Error: ". $qry_insert . "<br>" . mysqli_error($con_sql);}
//Edit Uploads Block End
?>
<body bgcolor="#FFFFFF" style="margin-top:0;margin-right:0;margin-bottom:0;marginleft:0">
<table width="799" height="246" border=1 align="center" bgcolor="#DDFFFF">
<tr>
<td colspan="9" align="center" class="whitehead" bgcolor="#6FB7FF"><b>
</b></td>
</tr>
<tr>
<td valign="top">
<br>
<center>
<form name="form1" method="post" action="#">
<table width="100%" border="1" cellspacing="0" cellpadding="2" class="brdr"
bgcolor="#F4FAFD">
<tr valign="top">
<td align="right" class="texti"><a class="texti" href="menu.php">Home</a></td>
</tr>
<tr>
<td colspan="9" align="CENTER" class="whitehead"
bgcolor="#A6FFFF"><B><h2>Edit Uploaded Course Content</h2></B></td>
</tr>
<tr>
<td colspan="6" class="msg">

<?php
if(isset($_GET['COURSE_ID']) && $editflag == 1)
{
echo "<img src=images/ico_success.gif width=16 height=16> <font
color='BLUE'>Record Edited Successfully !!</font>";
echo "<meta http-equiv=refresh content=1;url=edit.php";
}?> </td>
</tr>
<tr>
<td width="12%" align="center" class="head">S.No.&nbsp; </td>
<td width="12%" align="center" class="head">COURSE NAME </td>
<td width="12%" align="center" class="head">VENUE</td>
<td width="12%" align="center" class="head">FROM</td>
<td width="12%" align="center" class="head">TO</td>
<td width="12%" align="center" class="head">TITLE</td>
<td width="12%" align="center" class="head">COURSE FILE</td>
<td width="16%" align="center" class="head">UPDATE</td>
</tr>
<?php
$sql = "select * FROM course_entry where AUTHORIZED=0 AND IC_NO=$IC_NO
order by COURSE_NAME desc";
$sql_exec = mysqli_query($con_sql, $sql);
$rowflag = 0;
$sno = 1;
while($row=mysqli_fetch_assoc($sql_exec))
{
$rowflag = 1;
?>
<tr bgcolor="#049DF0">
<td height="64" align="center" class="links"><strong>&nbsp;<?php echo $sno++;
?></strong></td>
<td class="links" align="center" ><input type="text" name="COURSE_NAME<?php echo
$row['COURSE_ID']; ?>" id="COURSE_NAME<?php echo $row['COURSE_ID']; ?>"
value="<?php echo $row['COURSE_NAME']; ?>" /></td>
<td class="links" align="center"><input type="text" name="VENUE<?php echo
$row['COURSE_ID']; ?>" id="VENUE<?php echo $row['COURSE_ID']; ?>" value="<?php
echo $row['VENUE']; ?>"></td>
<td class="links" align="center"><input name="FROM_DT<?php echo
$row['COURSE_ID']; ?>" type="text" id="FROM_DT<?php echo $row['COURSE_ID']; ?>"
value="<?php echo date("d-M-Y", strtotime($row['FROM_DT'])); ?>" style="backgroundcolor:#CCCCCC;" size="9" class="links" /> </td>
<td class="links" align="center"><input name="TO_DT<?php echo $row['COURSE_ID'];
?>" type="text" id="TO_DT<?php echo $row['COURSE_ID']; ?>" value="<?php echo
date("d-M-Y", strtotime($row['TO_DT'])); ?>" style="background-color:#CCCCCC;"
size="9" class="links"></td>
<td class="links" align="center"><input type="text" name="TITLE<?php echo
$row['COURSE_ID']; ?>" id="TITLE<?php echo $row['COURSE_ID']; ?>" value="<?php
echo $row['COURSE_TITLE']; ?>"></td>
<td class="links" align="center"><!--<input type="file" name="FILE_NAME<?php
echo $row['COURSE_ID']; ?>" id="FILE_NAME<?php echo $row['COURSE_ID']; ?>">--
><a href=" http://localhost/course_data_mgmt/DataFiles/<?php echo $row['FILE_NAME'];
?>"> <?php echo $row['FILE_NAME']; ?></a>&nbsp;</td>
<td class="links" align="center"><input type="hidden" name="COURSE_ID<?php
echo $row['COURSE_ID']; ?>" value="<?php echo $row['COURSE_ID']; ?>"><a href="#"
onClick="javascript:document.form1.action='edit.php?COURSE_ID=<?php echo
$row['COURSE_ID']; ?>'; document.form1.submit();"><img src="images/edit.png"
height="25" width="25" alt="Edit" border="0"></a></TD>
<?php
}
if($rowflag == 0)
echo "<td colspan=20 class=head align=center><font color=red>No Records
Found</font></td>";
?>
</tr>
</table>

</form>
</body>
</html>
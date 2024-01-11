!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
<body>
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
$insertflag = 0;
if (isset($_GET['COURSE_ID']))
{
$COURSE=$_GET['COURSE_ID'];
$qry_insert = "DELETE FROM course_entry WHERE COURSE_ID='$COURSE'";
$qry_insert_exe = mysqli_query($con_sql,$qry_insert);
if($qry_insert_exe)
{
}
else
{
}
?>
$editflag = 1;
echo "Query Error: ". $qry_insert . "<br>" . mysqli_error($con_sql);}
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
bgcolor="#A6FFFF"><B><h2> Delete Course Content</h2></B></td>
</tr>
<tr>
<td colspan="6" class="msg"><?php
if(isset($_GET['COURSE_ID']) && $editflag == 1)
{
echo "<img src=images/ico_success.gif width=16 height=16> <font
color='BLUE'>Record Edited Successfully !!</font>";
echo "<meta http-equiv=refresh content=0;url=delete.php";
}?> </td>
</tr>
<tr>
<td width="12%" align="center" class="head">S.No.&nbsp; </td>
<td width="12%" align="center" class="head"> COURSE_ID </td>
<td width="12%" align="center" class="head">COURSE NAME </td>
<td width="12%" align="center" class="head">VENUE</td>
<td width="12%" align="center" class="head">FROM</td>
<td width="12%" align="center" class="head">TO</td>
<td width="12%" align="center" class="head">TITLE</td>
<td width="12%" align="center" class="head">COURSE FILE</td>
<td width="16%" align="center" class="head">DELETE</td>
</tr>
<?php

$sql = "select * from course_entry where AUTHORIZED=0 AND IC_NO=$IC_NO
order by COURSE_NAME desc";
$sql_exec = mysqli_query($con_sql, $sql);
$rowflag = 0;
$sno = 1;
while($row=mysqli_fetch_assoc($sql_exec))
{
$rowflag = 1;
?>
<tr bgcolor="#66FFFF">
<td class="links" align="left"><strong>&nbsp;<?php echo $sno++; ?></strong></td>
<td class="links" align="left"><?php echo $row ['COURSE_ID']; ?></td>
<td class="links" align="left"><?php echo $row['COURSE_NAME']; ?></td>
<td class="links" align="left"><?php echo $row['VENUE']; ?></td>
<td class="links" align="center"><?php echo date("d-M-Y",
strtotime($row['FROM_DT'])); ?></td>
<td class="links" align="center"><?php echo date("d-M-Y",
strtotime($row['TO_DT'])); ?></td>
<td class="links" align="left"><?php echo $row['COURSE_TITLE']; ?></td>
<!--<td class="links" align="left"><?php echo $row['FILE_NAME']; ?></td>-->
<td class="links" align="center"><a
href="http://localhost/course_data_mgmt/DataFiles/<?php echo $row['FILE_NAME']; ?>">
<?php echo $row['FILE_NAME']; ?></a>&nbsp;</td>
<!--<td class="links" align="center"></TD>-->
<td class="links" align="center"><input type="hidden" name="COURSE_ID<?php
echo $row['COURSE_ID']; ?>" value="<?php echo $row['COURSE_ID']; ?>">
<a href="#"
onClick="javascript:document.form1.action='delete.php?COURSE_ID=<?php echo
$row['COURSE_ID']; ?>'; var confdelete = confirm('Are you sure you want to DELETE?');
if(confdelete) document.form1.submit();"><img src="images/delete.jpeg" height="25"
width="25" alt="Delete" border="0"></a>
</TD>

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
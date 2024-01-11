<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$IC_NO = $_SESSION['IC_NO'];
$NAME = $_SESSION['NAME'];
$ROLE=$_SESSION['ROLE'];
// $autho=$_GET['NAME'];
$con_sql = mysqli_connect("localhost","root","","course_data_mgmt");
if(mysqli_connect_errno())
echo "Failed to connect to MySQL: " . mysqli_connect_error();
50
?>
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
bgcolor="#A6FFFF"><B><h2> Authorise Course Content</h2></B></td>
</tr>
<tr>
<td width="12%" align="center" class="head">S.No.&nbsp; </td>
<td width="12%" align="center" class="head"> COURSE ID </td>
<td width="12%" align="center" class="head">COURSE NAME </td>
<td width="12%" align="center" class="head">VENUE</td>
<td width="12%" align="center" class="head">FROM</td>
<td width="12%" align="center" class="head">TO</td>
<td width="12%" align="center" class="head">TITLE</td>
<td width="12%" align="center" class="head">COURSE FILE</td>
51
</tr>
<?php
<td width="12%" align="center" class="head">AUTHORIZE</td>
$sql = "select * from course_entry where AUTHORIZED=0 order by
COURSE_NAME desc";
$sql_exec = mysqli_query($con_sql, $sql);
$rowflag = 0;
$sno = 1;
while($row=mysqli_fetch_assoc($sql_exec))
{
$rowflag = 1;
if (isset($_GET['COURSE_ID']))
{
$COURSE_ID=$_GET['COURSE_ID'];
$qry="UPDATE course_entry set AUTHORIZED=1 , Authorized_name='$NAME'
WHERE COURSE_ID='$COURSE_ID'";
$qry_insert_exe = mysqli_query($con_sql,$qry);
//Check whether the query was successful or not
if($qry_insert_exe)
{
}
else
{
}
?>
$editflag = 1;
echo "Query Error: ". $qry_insert . "<br>" . mysqli_error($con_sql);}
52
</td>
</tr>
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
<!--<td class="links" align="left"><?php echo $row['AUTHORIZED'];
?></td>-->
<!--<td class="links" align="center"></TD>-->
<td class="links" align="center"><a
href="authorised.php?COURSE_ID=<?php echo $row['COURSE_ID']; ?>"><img
src="images/authorise.png" height="25" width="25" alt="authorise" border="0"></a></TD>
<?php
}
if($rowflag == 0)
echo "<td colspan=20 class=head align=center><font color=red>No Records
Found</font></td>";
?>
</tr>
<?php
<tr>
<td colspan="6" class="msg">
53
if(isset($_GET['COURSE_ID']) && $editflag == 1)
{
echo "<img src=images/ico_success.gif width=16 height=16> <font
color='BLUE'> Authorised Successfully !!</font>";
echo "<meta http-equiv=refresh content=1;url=authorised.php";
}?>
</td></tr>
</table>
</form>
</body>
</html>
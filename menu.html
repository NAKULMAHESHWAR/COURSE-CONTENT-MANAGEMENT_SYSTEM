<?php
session_start();
$IC_NO = $_SESSION['IC_NO'];
$NAME = $_SESSION['NAME'];
$ROLE = $_SESSION['ROLE'];
//if($IC_NO == "")

{
//echo "<br><br><div align='center'><img src=images/ico_error.gif width=16
height=16> <font color='red'>Session Expired! Redirecting you to Login
page!!</font></div>";
//echo "<meta http-equiv=refresh content=1;url=login.php>";
}//
?>
<?php
$con_sql = mysqli_connect("localhost","root","","course_data_mgmt");
if(mysqli_connect_errno())
echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>
<html>
<head>
<title>Course Content Management:: Menu</title>
<link rel="stylesheet" href="/style/style.css" type="text/css"></head>
<body bgcolor="#FFFFDD" style="margin-top:0;margin-right:0;margin-bottom:0;marginleft:0">
<table align="center" width="99%" border="0" cellspacing="0" cellpadding="0"
height="100%" bgcolor='#84C1FF'">
<tr><td height="1" colspan="2">&nbsp;</td></tr>
<tr valign="top">
<td align="left" class="texti">&nbsp;&nbsp;Welcome <?php echo $NAME;?></td>
<td align="left" class="texti">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; COURSE CONTENT MANAGEMENT
SYSTEM </td>
<td align="right" class="texti"><a class="texti"
href="http://localhost/course_data_mgmt/login.php">Logout</a>&nbsp;&nbsp;</td>
</tr>
<tr>
</tr>

<td valign="top" width="20%">
<table width="95%" border="1" cellspacing="2" cellpadding="3" class="brdr"
bgcolor="#9ECAF5">
<?php if($ROLE == "Admin") { ?>
<tr>
<td colspan="5" align="center" bgcolor="#0066FF"><B>Admin
Menu</B></td>
</tr>
<!-- <tr>
<td width="18%" align="center"><a class="titlelogin"
href="/adduser.php">Add User</a></td>
<td width="23%" align="center"><a class="titlelogin"
href="/edituser.php">Edit User </a></td>
<td width="17%" align="center"><a class="titlelogin"
href="/deleteuser.php">Delete User </a></td>
<td width="13%" align="center"><a class="titlelogin"
href="/viewuser.php">View User </a></td>
</tr>
--><tr>
<td colspan="4" class="head" align="center">Action</td>
</tr>
<tr rowspan="2">
<td align="center" colspan="4"><a class="titlelogin"
href="authorised.php">View/ Authorise Course Content </a></td>
</tr>
<tr rowspan="2">
<td align="center" colspan="4"><a class="titlelogin"
href="edit_content.php">Edit Course Content </a></td>
</tr>
<tr rowspan="2">
<td align="center" colspan="4"><a class="titlelogin"
href="delete_course.php">Delete Course Content </a></td>
</tr>

<tr>
<td align="center" colspan="4">&nbsp;</td>
</tr>
<?php
}
</td>
?>
<tr>
</tr>
<tr>
<td colspan="5" align="center" bgcolor="0066FF"><B>User Menu</B></td>
<td colspan="5" align="center" class="head">Course Content Management
</tr>
<tr>
<td align="center"><a class="titlelogin" href="add_uploads.php">Add /
Upload</a></td>
<td align="center"><a class="titlelogin" href="view.php">View</a></td>
<td align="center"><a class="titlelogin" href="edit.php">Edit</a></td>
<td align="center"><a class="titlelogin" href="delete.php">Delete</a></td>
</tr>
</table>
</center>
</td>
<td valign="top" width="80%"> <table width="99%" border="1"
cellspacing="0" cellpadding="2" class="brdr" bgcolor='#FFFFFF'">
<tr>
<td colspan="8" align="center" bgcolor="#0F5FCA"
class="whitehead">MENU </td>

<tr>
<td colspan="5" class="">
<?php
if(isset($_GET['COURSE_ID']) && $deleteflag == 1)
{
echo "<img src=images/ico_success.gif width=16 height=16> <font
color='green'>Record Successfully Deleted !!</font>";
echo "<meta http-equiv=refresh
content=1;url=menu.php?CATEGORY="?><?php echo $CATEGORY;
}?> </td>
</tr>
<tr>
<?php
<td width="10%" align="center" class="head">S.No.&nbsp; </td>
<td width="12%" align="center" class="head"> Course Id </td>
<td width="21%" align="center" class="head">Name of Course </td>
<td width="9%" align="center" class="head">Venue</td>
<td width="14%" align="center" class="head">From Date</td>
<td width="11%" align="center" class="head">To Date</td>
<td width="11%" align="center" class="head">Title</td>
<td width="12%" align="center" class="head">Course file</td>
</tr>
desc";
$sql = "select * from course_entry where AUTHORIZED=1 order byCOURSE_ID
$sql_exec = mysqli_query($con_sql, $sql);
$rowflag = 0;
$sno = 1;
while($row=mysqli_fetch_assoc($sql_exec))
{
$rowflag = 1;
?>

<tr>
<td class="links" align="left"><strong>&nbsp;<?php echo $sno++;
?></strong></td>
<td class="links" align="left"><?php echo $row ['COURSE_ID']; ?></td>
<td class="links" align="left"><?php echo $row['COURSE_NAME']; ?></td>
<td class="links" align="left"><?php echo $row['VENUE']; ?></td>
<td class="links" align="center"><?php echo date("d-M-Y",
strtotime($row['FROM_DT'])); ?></td>
<td class="links" align="center"><?php echo date("d-M-Y",
strtotime($row['TO_DT'])); ?></td>
<td class="links" align="left"><?php echo $row['COURSE_TITLE']; ?></td>
<!--<td class="links" align="left"><?php echo $row['FILE_NAME']; ?></td>-->
<!--<td class="links" align="center"><a
href="http://localhost/course_data_mgmt/course_entry/<?php echo $row['FILE_NAME'];
?>"> <?php echo $row['FILE_NAME']; ?></a>&nbsp;</td>
-->
<td class="links" align="center"><a href=
"http://localhost/course_data_mgmt/DataFiles/<?php echo $row['FILE_NAME']; ?>"> <?php
echo $row['FILE_NAME']; ?></a>&nbsp;</td>
<!-- <td class="links" align="center"><a
href="http://localhost/course_data_mgmt/course_entry/<?php echo $row['course_file']; ?>">
<?php echo $row['course_file']; ?></a>&nbsp;</td>-->
<?php
}
if($rowflag == 0)
echo "<td colspan=20 class=head align=center><font color=red>No Records
Found</font></td>";
?>
</tr>
</table>
</form>
</center>

</td>
</tr>
</table></td>
</tr>
<!--<tr height="250"><td valign="top" colspan="2">&nbsp;&nbsp;<font
color="red"><b>Important Note: </b><br> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Maximum permitted file size is
2GB.
</font></td></tr>-->
</table>
</body>
</html>
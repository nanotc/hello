<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function checkVali()
{
	if($('#columns1').val()!=$('#rows2').val())
	{
		alert('please enter correct order of matrix');
		return false;
	}
}
</script>
</head>

<body>
<?php echo __DIR__; 
echo $_SERVER['DOCUMENT_ROOT'];
$mul=array();
$m='';
$n='';
$k='';  ?>
<?php if(!isset($_REQUEST['action'])) { ?>
<form action="" method="post" name="addrowcol">
<h2>Enter number of rows and colums of first matrix</h2>
<table border="1">
<tr>
<td>Rows : </td><td><input type="text" name="rows1" id="rows1" /></td>
</tr>
<tr>
<td>Columns : </td><td><input type="text" name="columns1" id="columns1" /></td>
</tr>
</table>
<h2>Enter number of rows and colums of Second matrix</h2>
<table border="1">
<tr>
<td>Rows : </td><td><input type="text" name="rows2" id="rows2" /></td>
</tr>
<tr>
<td>Columns : </td><td><input type="text" name="columns2" id="columns2" /></td>
</tr>
</table>
<div style="margin-top:10px;">
<input type="submit" name="action" value="Add matrix" onclick="return checkVali();"/>
<input type="reset" value="cancel" />
</div>
</form>
<?php  } ?>
<?php if(isset($_REQUEST['action']) && $_REQUEST['action']=='Add matrix') { ?>
<form name="addelements" action="" method="post">
<h3>Enter first matrix elements : </h3>

<table border="1">
<?php 


for($i=0;$i<$_REQUEST['rows1'];$i++) 
{
	echo "<tr>";
	for($j=0;$j<$_REQUEST['columns1'];$j++)
	{
		echo '<td><input type="text" name="matrix1['.$i.']['.$j.']" size="3"></td>';
	}
	echo "</tr>";
}


?>
</table>
<h3>Enter Second matrix elements : </h3>
<table border="1">

<?php 

for($j=0;$j<$_REQUEST['rows2'];$j++) 
{
	echo "<tr>";
	for($k=0;$k<$_REQUEST['columns2'];$k++)
	{
		echo '<td><input type="text" name="matrix2['.$j.']['.$k.']" size="3"></td>';
	}
	echo "</tr>";
}


?>
</table>
<input type="hidden" name="m" value="<?php echo $_REQUEST['rows1']; ?>" />
<input type="hidden" name="n" value="<?php echo $_REQUEST['columns1']; ?>" />
<input type="hidden" name="p" value="<?php echo $_REQUEST['columns2']; ?>" />
<input type="submit" name="action" value="multiply" />
</form>
<?php } ?>
<?php if(isset($_REQUEST['action']) && $_REQUEST['action']=='multiply') { ?>
<?php
$m=$_REQUEST['m'];
$n=$_REQUEST['n'];
$p=$_REQUEST['p'];
for($i=0;$i<$m;$i++)
{
	for($k=0;$k<$p;$k++)
	{
		$mul[$i][$k]=0;
		for($j=0;$j<$n;$j++)
		{
		 $mul[$i][$k]=$mul[$i][$k]+($_REQUEST['matrix1'][$i][$j]*$_REQUEST['matrix2'][$j][$k]);	
		}
	}
}
echo "<h3>Multiply is :</h3><table border='1'>";
for($i=0;$i<$m;$i++)
{
	echo "<tr>";
	for($k=0;$k<$p;$k++)
	{
		echo "<td>".$mul[$i][$k]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
  ?>
  <br />
  <a href="http://localhost/array/arraymultiply/">BACK</a>
<?php  } ?>
</body>
</html>
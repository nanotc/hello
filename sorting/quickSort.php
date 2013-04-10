<html>
<head>
<title>Quick Sort</title>
</head>
<body>
<h3>Quick Sort : </h3>
<?php if(empty($_REQUEST)){ ?>
<form method="post" action="" name="arraysize">
<table>
<tr><td>Enter size of an Array :</td><td><input type="text" name="size"></td></tr>
<tr><td colspan="2"><input type="hidden" name="action" value="arrsize"><input type="submit" value="Enter"></td></tr>
</table>
</form>

<?php } ?>
<?php if(isset($_REQUEST['action']) && $_REQUEST['action']=='arrsize') { ?>
<h4>Enter Array elements :</h4>
<form name="eleArr" action="" method="post">
<table>
<?php for($i=0;$i<$_REQUEST['size'];$i++) { ?>
<tr>
<td>
Enter <?php echo $i;?> array element : 
</td>
<td>
<input type="text" name="elements[]">
</td>
</tr>

<?php }  ?>
<tr><td colspan="2"><input type="hidden" name="action" value="arrEle"><input type="submit" value="Enter Elements" name="ele"></td></tr>
</table>
</form>

<?php }  ?>
<?php if(isset($_REQUEST['action']) && $_REQUEST['action']=='arrEle') { ?>
<?php 

$arr=$_REQUEST['elements'];
$first=0;
$last=count($_REQUEST['elements'])-1;
$pivot=$arr[0];

echo "Before Sorting Array is :";
echo "<table border='1'><tr>";
for($i=0;$i<count($arr);$i++)
{
	echo "<td width='30'> ". $arr[$i] ." </td>";
}
echo "</tr></table>";

echo "<br>After Sorting Array is :";
//print_r($arr); ?>
<?php } ?>
</body>
</html>
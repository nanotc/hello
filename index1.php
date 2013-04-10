<?Php

$i=0;
$l=1;
	while($i<=2)
	{		
		
		$j=0;
		while($j<= 2)
		{	
		
			if($i==$i && $j==0)
			{
				echo '[';
			}
			echo ' '.$l;			
			
			if($i==$i && $j==2)
			{
			echo ']';
			}
			
			
			$l++;
			$j++;
		}
echo '<br>';
	
	$i++;
	}


echo "***************************************";
echo '<br>';

$i=0;
$l=1;
	while($i<=2)
	{		
		
		$j=0;
		while($j<= 2)
		{	
		
			if($j==0)
			{
				echo '[';
			}
			echo ' '.$l;			
			
			if($j==2)
			{
			echo ']';
			}
			
			
			$l++;
			$j++;
		}
echo '<br>';
	
	$i++;
	}
?>
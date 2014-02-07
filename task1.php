<title>Task1</title>
<?php

function obatNyamuk($n){
	$total = $n*$n;
	for($j=0; $j<=$n;$j++)
	{
		if($j==0)
			for($i=1;$i<$n+1;$i++)
				echo $i . "";
		else
			for($k=0;$k<$n;$k++)
			{
				if($k==0)
					echo $total--;
				else if($k==$n-1)
					echo $i++;
				else
				echo " ";
			}
		echo "<br/>";
	}
}

obatNyamuk(3);
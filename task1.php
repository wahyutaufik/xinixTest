<title></title>
<?php 
	function actionTest($n)
	{
		$total = $n*4 - 4;
		for($j=0; $j<$n;$j++)
		{
			if($j==0)
				for($i=1;$i<$n+1;$i++)
					echo $i . " ";
			else if($j==$n-1)
				for($j=$total;$j>$i-1;$j--)
					echo $j . " ";
			else
				for($k=0;$k<$n;$k++)
				{
					if($k==0)
						echo $total--;
					else if($k==$n-1)
						echo $i++;
					else
						echo "*";
					echo " ";
				}
			echo "<br />";
		}
	}
	actionTest(3);
 ?>
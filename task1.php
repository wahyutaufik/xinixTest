<title>Task1</title>
<?php

// 2n + n
// $limit = 3;
// $offset = ((2 * $limit) + $limit);
// $wrapper = '';
// $content = '';

// for ($i=0; $i < $limit  ; $i++) {
// 	$wrapper .= str_repeat('*', $offset) . '<br/>';
// 	$content .= str_repeat('*', $limit).
// 				str_repeat('|', $limit).
// 				str_repeat('*', $limit) . '<br/>';
// }
// echo "<pre>";
// echo $wrapper . $content . $wrapper;


function obatNyamuk($n){
	$total = $n*4-4;
	for($j=0; $j<$n;$j++)
	{
		if($j==0)
			for($i=1;$i<$n+1;$i++)
				echo $i . "";
		else if($j==$n-1)
			for($j=$total;$j>$i-1;$j--)
				echo $j . "";
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
echo "<pre>";

obatNyamuk(2);

<h1>
<meta http-equiv="refresh" content="0.1">
<?php
	for($i = 0; $i < 20000; $i++) {
	//echo(rand() . "<br>");
	//echo(rand() . "<br>");
	//echo(rand(65,91));
	//echo "<br />";
	$a = (rand(65,91));
	$b = (rand(65,91));
	$c = (rand(65,91));
	$d = (rand(65,91));
	$e = (rand(65,91));
	//echo "$a $b $c $d $e";
	$ac = chr($a);
	$bc = chr($b);
	$cc = chr($c);
	$dc = chr($d);
	$ec = chr($e);
	//echo "<br />";
	//echo "$ac $bc $cc $dc $ec";
	$txt = $ac.$bc.$cc.$dc.$ec;
	//echo "<br />";
	echo "$txt&nbsp";
	if ($i % 15 == 0){echo "<br />";}
	}
?>
</h1>

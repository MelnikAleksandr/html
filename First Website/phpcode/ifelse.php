<!DOCTYPE html>
<html><head><title>if else</title>

<style>
.r1 { background-color: #0000ff;
		color: #ff0000;
	}

.r2 { background-color:#ff0000;
		color: #0000ff;
	}
</style>
</head>
<body>
	<center>
<h1>
Episode VII
THE FORCE AWAKENS
Luke Skywalker has vanished.
In his absence, the sinister
FIRST ORDER has risen from
the ashes of the Empire
and will not rest until
Skywalker, the last Jedi,
has been destroyed.

With the support of the
REPUBLIC, General Leia Organa
leads a brave RESISTANCE.
She is desperate to find her
brother Luke and gain his 
help in restoring peace
and justice to the galaxy.

Leia has sent her most daring
pilot on a secret mission
to Jakku, where an old ally
has discovered a clue to
Luke's whereabouts....



<h1><?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2==0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
		
		echo "* * * * * * * * $i * * * * * * * *<br />";
		echo "</div>";
		
	}
?>
</h1>
</center>
</body>
</html>

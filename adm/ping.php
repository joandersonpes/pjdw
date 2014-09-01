<?php 

	$ping = "";
	if(isset($_GET['site'])){ 
	$site = $_GET['site'];
	$ping = shell_exec("ping -c 5 $site");
	}
	$pingarray = explode(" ",$ping);
	?>


<div id="ping"> <p id="ping">PING A PARTIR DO SERVIDOR !!</p>
						

<form action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="page" value="ping">
<input id="site" type="text" name="site" id="site" placeholder="Digite aqui o site ou IP" size="25px">
<input type="submit" value="PING" >
</form>


<br><br>

<div id="backping">
<pre><?php echo $ping;?></pre>

	



</div> <!--fim da div do resultado do ping-->


</div><!--fim da div ping-->



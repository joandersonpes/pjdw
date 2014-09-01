
<?php $ipconfig = shell_exec("/sbin/ifconfig");
		$iparray = explode(":", $ipconfig);
		?>

<p id="inforede">Toda Informação da rede!</p><br>
<div id="ipconfig" align=center>

<textarea id="rede" cols="90" rows="20" readonly>
<?php echo "$ipconfig"?>
</textarea>


</div>








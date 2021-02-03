<?php
	$rfid=$_POST['id'];
	$Write="<?php $' . 'id='' . $rfid . ''; ' . 'echo $' . 'id;' . ' ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<?php
	if(isset($_POST['run'])){
	// Ton Code PHP
	exec_shell('sudo /home/pi/MuonPlatform/bin/Runner');
}
?>

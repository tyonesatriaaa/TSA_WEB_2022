<?php include('sesi-user.php'); ?>
<html>
<head>
	<title>Area User | root93.co.id</title>
</head>
<body>
 
	<div style="text-align:center">
		<h2>User Area</h2>
		<p><a href="sessionLogout.php">Logout</a></p>
 
		<p>Anda login sebagai <?php echo $_SESSION['username']; ?></p>
	</div>
</body>
</html>
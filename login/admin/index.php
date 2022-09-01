<?php include('sesi-admin.php'); ?>
<html>
<head>
	<title>Area Admin</title>
</head>
<body>
 
	<div style="text-align:center">
		<h2>Admin Area</h2>
		<p><a href="sessionLogout.php">Logout</a></p>
 
		<p>Anda login sebagai <?php echo $_SESSION['username']; ?></p>
	</div>
</body>
</html>
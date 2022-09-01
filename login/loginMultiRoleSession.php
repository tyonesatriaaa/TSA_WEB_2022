<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select * from user where username ='$username' and password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount>0) { 
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
}
if ($fechResult['role']=='admin') { 
echo  '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';

}elseif ($fechResult['role']=='user') { 
echo '<script language="javascript">alert("Anda berhasil Login User!"); document.location="user/index.php";</script>';
}
else {
echo "Anda gagal login ";
echo " <a href='sessionloginform.html'>Login Form</a>";
}

mysqli_close($connect);
?>
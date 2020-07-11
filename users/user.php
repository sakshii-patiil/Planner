<?php 
require '../connect.inc.php';
ob_start();
session_start();
$_SESSION['username'];
$_SESSION['password'];
$_SESSION['email'];
$_SESSION['logged_in'];
if($_SESSION['logged_in']==false){
    header('Location: ../log_in.php');
};
echo "<strong>Username</strong> : ".$_SESSION['username']."</br><strong>Status</strong> : "."Logged in";

if (isset($_POST['logout'])) {
    global $conn;
    $q = "UPDATE user_info SET status='Inactive' WHERE username = '".$_SESSION['username']."'";

					if ($conn->query($q) === TRUE) {
						 $_SESSION['logged_in'] = false;
						 header('Location: ../log_in.php');
					} else {
					 echo "<script type='text/javascript'>Couldn't Log Out.</script> ";
					}
}
?>
<form action="user.php" method="post">
    <br>
    <input type="submit" name="logout" id="logout" value="Log out">
</form>
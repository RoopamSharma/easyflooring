<?php
	session_start();
	unset($_SESSION['usr']);
?>
<script>
	window.location.href="login.php";
</script>
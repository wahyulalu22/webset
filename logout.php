<?php;
session_start();
session_destroy();
?>
<script>
alert('LogOut berhasil!');
document.location = 'login.php';
</script>

<?php
session_start();
session_destroy();
Trang 68
setcookie('username','', time() -1);
setcookie('password','', time() -1);
echo "<script>alert('Logout Successfull.'); location.href='dangnhap.php';</script>";
?>

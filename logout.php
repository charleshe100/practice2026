<?php
// 清除 cookie
setcookie("login_user", "", time() - 3600, "/");

// 導回登入頁
header("Location: login.php");
exit;
?>
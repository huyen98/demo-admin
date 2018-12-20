<?php
 
// Require database & thông tin chung
require_once 'core/init.php';
 
// Require header
require_once 'include/header.php';
// Nếu đăng nhập
if ($user)
{
 // Hiển thị sidebar
require_once 'templates/sidebar.php';
 
// Hiển thị sidebar
require_once 'templates/content.php';
}
// Nếu không đăng nhập
else
{
    // Hiển thị form đăng nhập
    require_once 'templates/signin.php';
}
 
// Require footer
require_once 'include/footer.php';
 
?>
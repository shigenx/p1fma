<?php
//regular user login page
$title = 'Web Programming Using PHP FMA';
include_once 'inc/header.php';
$self = htmlentities($_SERVER['PHP_SELF']);
?>

<form action="<?php echo "$self" ?>" method="post">
    <?php include_once 'inc/login.php'; ?>
</form>
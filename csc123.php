<html>
<head>
<!-- this is where you put PHP functions -->
<?php
require 'secure.php';

?>
</head>
<body>
<!-- this is where you put html & embedded PHP -->
<?php linkBar();?>

This is a page for CSC123, I hope you enjoy it alot!

Welcome <?php echo($_SESSION['email']); ?> to the class.

</body>
</html>


<!DOCTYPE html>

<?php ob_start(); // start output buffering ?>

<?php include ('index.php')?>

<?php file_put_contents("index.html", ob_get_contents()); // write the contents of the buffer to file
ob_end_clean(); // stop output buffering ?>

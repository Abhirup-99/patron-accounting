<?php
session_start();
if (!isset($_SESSION['idCustomer'])) {
    header('location: index.php');
}
session_destroy();
header('location: index.php');

?>
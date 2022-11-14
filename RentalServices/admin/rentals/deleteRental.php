<?php
include_once '../config/DbConfig.php';
include_once "../config/Session.php";
Session::start();
$conn = getdbconnection();
$sql = "DELETE FROM rentals WHERE rental_id='" . $_GET["id"] . "'";
if ($conn->exec($sql)) {
    Session::set('success-message', 'Rental Deleted Successfully!');
    header('Location: list-rentals.php'); 

} else {
    echo "Error deleting record " ;
}
$conn = null;

?>
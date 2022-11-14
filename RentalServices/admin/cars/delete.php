<?php
include_once '../config/DbConfig.php';
include_once "../config/Session.php";
Session::start();
$conn = getdbconnection();
$sql = "DELETE FROM cars WHERE car_id='" . $_GET["id"] . "'";
if ($conn->exec($sql)) {
    Session::set('success-message', 'Car Deleted Successfully!');
    header('Location: list-cars.php'); 

} else {
    echo "Error deleting record " ;
}
$conn = null;

?>
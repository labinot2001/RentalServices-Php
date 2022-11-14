<?php
include_once '../config/DbConfig.php';
include_once "../config/Session.php";
Session::start();
$conn = getdbconnection();
$sql = "DELETE FROM brands WHERE brand_id='" . $_GET["id"] . "'";
if ($conn->exec($sql)) {
    Session::set('success-message', 'Brand Deleted Successfully!');
    header('Location: list-brands.php'); 

} else {
    echo "Error deleting record " ;
}
$conn = null;

?>
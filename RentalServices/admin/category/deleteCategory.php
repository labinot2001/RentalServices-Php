<?php
include_once '../config/DbConfig.php';
include_once "../config/Session.php";
Session::start();
$conn = getdbconnection();
$sql = "DELETE FROM category WHERE category_id='" . $_GET["id"] . "'";
if ($conn->exec($sql)) {
    Session::set('success-message', 'Category Deleted Successfully!');
    header('Location: list-categories.php'); 

} else {
    echo "Error deleting record " ;
}
$conn = null;

?>
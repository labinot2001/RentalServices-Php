<?php
include_once "DbConfig.php";
include_once "Crud.php";

$data_array = [
    'car_start' => "2005-11-03",
    'car_end' => "2005-11-04",
    'car_name' => 'bmw',
];
// $data_array = [
//     'rental_name' => 'Besiana Rent'
// ];

$crud = new Crud();

//$crud->create($data_array, 'rentals');
//$results = $crud->read('SELECT * FROM rentals');
//var_dump($results);
//$crud->update("UPDATE rentals SET rental_name = 'Besiana Rent' where rental_id = 1");
//$crud->delete('DELETE FROM rentals where rental_id = 4');

// $crud->create($data_array, 'cars');
// // getdbconnection();
// $results = $crud->read('SELECT * FROM cars ');
// var_dump($results);
// $crud->update('UPDATE cars SET car_name = "AUDI" WHERE car_id = 8 ');
   $crud->delete('DELETE from cars where car_id = 8');

?>
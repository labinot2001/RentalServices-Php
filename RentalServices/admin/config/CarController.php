<?php
    include_once "Crud.php";
    include_once "Session.php";

    class CarController{

        private $crud;

        public function __construct(){
            $this->crud = new Crud();
        }
        public function addCar(){
            $car_data = [
                'car_name' => $_POST['car_name'],
                'car_price' => $_POST['car_price'],
                'car_start' => $_POST['car_start'],
                'car_end' => $_POST['car_end'],

            ];
            $car_id = $this->crud->create($car_data, 'cars');

            $cr = isset($_POST['rentals']) ? $_POST['rentals'] : "" ;
            $cb = isset($_POST['brands']) ? $_POST['brands'] : "" ;
            $cc = isset($_POST['category']) ? $_POST['category'] : "" ;

            // var_dump($cr);
            // var_dump($cb);
            // var_dump($cc);


            // $cr_id = isset($_GET['rental_id']);
            // $cb_id = isset($_GET['brand_id']);
            // $cc_id = isset($_GET['category_id']);


            $this->createCBRC($cr,$cb,$cc,$car_id);
            $this->saveAndUploadCarImage($car_id);
            Session::set('success-message', 'Car Added Successfully!');

            header('Location: list-cars.php'); 

        }
        public function createCBRC($cr,$cb,$cc,$car_id){

            $data = [
                'crbc_ref_rental' => $cr,
                'crbc_ref_brand' => $cb,
                'crbc_ref_category' => $cc,
                'crbc_ref_car' => $car_id,
            ];

            $this->crud->create($data, 'cr_rentals_brands_category');
                           

                    
        }
        public function getCars(){
            $query = 'SELECT * FROM cars 
            LEFT JOIN cr_rentals_brands_category ON car_id = crbc_ref_car
            LEFT JOIN rentals on crbc_ref_rental = rental_id
            LEFT JOIN brands ON crbc_ref_brand = brand_id
            LEFT JOIN images ON img_ref_car = car_id
            LEFT JOIN category ON crbc_ref_category = category_id
            GROUP BY car_id
            ORDER BY car_id desc';
            

            $results = $this->crud->read($query);
            return $results;

        }
        public function getCar($car_id){
            $query = "SELECT * FROM cars 
            LEFT JOIN cr_rentals_brands_category ON car_id = crbc_ref_car
            LEFT JOIN rentals on crbc_ref_rental = rental_id
            LEFT JOIN brands ON crbc_ref_brand = brand_id
            LEFT JOIN images ON img_ref_car = car_id
            LEFT JOIN category ON crbc_ref_category = category_id
            WHERE car_id = $car_id
            GROUP BY car_id
            ORDER BY car_id desc";
            

            $results = $this->crud->read($query);
            return $results;

        }
        public function editCar($car_id){

            $car_start = $_POST['car_start'];
            $car_end = $_POST['car_end'];
            $car_name = $_POST['car_name'];
            $car_price = $_POST['car_price'];


            $sql = "UPDATE cars
                    set car_start = '$car_start', car_end = '$car_end', car_name = '$car_name', car_price = $car_price
                    WHERE car_id = $car_id ";

            $this->crud->update($sql);

            // $this->createCBRC($_POST['rentals'], $_POST['brands'], $_POST['category'], $car_id );

            if(!empty($_FILES["cover_image"]["name"])){
                //delete pervious image
                $this->crud->delete("delete from images where img_ref_car = $car_id");
                $this->saveAndUploadCarImage($car_id);
            }
            Session::set('success-message', 'Car Edited Successfully!');

            header('Location: list-cars.php'); 
        }
        public function deleteCar($car_id){           

            $sql = "DELETE FROM cars
                    WHERE car_id = $car_id ";

            $this->crud->delete($sql);

            Session::set('success-message', 'Car Deleted Successfully!');

            header('Location: list-cars.php'); 
        }
        public function saveAndUploadCarImage($car_id){

            $dir = "../../assets/car_$car_id";
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }

            $dir = $dir."/".basename($_FILES["cover_image"]["name"]);
            
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], $dir);

            $image_info = [
                'img_path' => str_replace('../../','',$dir),
                'img_ref_car' => $car_id
            ];

            $this->crud->create($image_info, 'images');
        }





    }
    


?>
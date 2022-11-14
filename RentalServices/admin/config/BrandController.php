<?php
    include_once "Crud.php";

    class BrandController{

        private $crud;

        public function __construct(){
            $this->crud = new Crud();
        }
        public function addBrand(){
            $brand_data = [
                'brand_name' => $_POST['brand_name'],
            ];
            $brand_id = $this->crud->create($brand_data, 'brands');


            $this->saveAndUploadBrandImage($brand_id);
            Session::set('success-message', 'Brand Added Successfully!');

            header('Location: list-brands.php'); 

        }
        public function createBrand($brand_id){

            $data = [
                'brand_name' => $brand_id,
            ];

            $this->crud->create($data, 'brands');
                           

                    
        }
        public function getBrands(){
            $query = 'SELECT * FROM brands
                      LEFT JOIN imagesBrand ON img_ref_brand = brand_id';
            

            $results = $this->crud->read($query);
            return $results;

        }
        public function getBrand($brand_id){
            $query = "SELECT * FROM brands 
                        LEFT JOIN imagesBrand ON img_ref_brand = brand_id
                        WHERE brand_id = $brand_id";
        
            $results = $this->crud->read($query);
            return $results;

        }
        public function editBrand($brand_id){

            $brand_name = $_POST['brand_name'];

            $sql = "UPDATE brands
                    set  brand_name = '$brand_name'
                    WHERE brand_id = $brand_id ";

            $this->crud->update($sql);

            if(!empty($_FILES["cover_image"]["name"])){
                //delete pervious image
                $this->crud->delete("delete from imagesBrand where img_ref_brand = $brand_id");
                $this->saveAndUploadBrandImage($brand_id);
            }
            Session::set('success-message', 'Brand Edited Successfully!');

            header('Location: list-brands.php'); 
        }
        public function saveAndUploadBrandImage($brand_id){

            $dir = "../../assets/brand_$brand_id";
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }

            $dir = $dir."/".basename($_FILES["cover_image"]["name"]);
            
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], $dir);

            $image_info = [
                'img_path' => str_replace('../../','',$dir),
                'img_ref_brand' => $brand_id
            ];

            $this->crud->create($image_info, 'imagesBrand');
        }





    }
    


?>
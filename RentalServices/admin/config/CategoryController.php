<?php
    include_once "Crud.php";

    class CategoryController{

        private $crud;

        public function __construct(){
            $this->crud = new Crud();
        }
        public function addCategory(){
            $category_data = [
                'category_name' => $_POST['category_name'],
            ];
            $category_id = $this->crud->create($category_data, 'category');


            $this->saveAndUploadCategoryImage($category_id);
            Session::set('success-message', 'Category Added Successfully!');

            header('Location: list-categories.php'); 

        }
        public function createCategory($category_id){

            $data = [
                'category_name' => $category_id,
            ];

            $this->crud->create($data, 'category');
                           

                    
        }
        public function getCategories(){
            $query = 'SELECT * FROM category 
                        LEFT JOIN imagesCategory ON img_ref_category = category_id';
            

            $results = $this->crud->read($query);
            return $results;

        }
        public function getCategory($category_id){
            $query = "SELECT * FROM category
            LEFT JOIN imagesCategory ON img_ref_category = category_id 
            WHERE category_id = $category_id";
        
            $results = $this->crud->read($query);
            return $results;

        }
        public function editCategory($category_id){

            $category_name = $_POST['category_name'];

            $sql = "UPDATE category
                    set  category_name = '$category_name'
                    WHERE category_id = $category_id ";

            $this->crud->update($sql);

            if(!empty($_FILES["cover_image"]["name"])){
                //delete pervious image
                $this->crud->delete("delete from imagesCategory where img_ref_category = $category_id");
                $this->saveAndUploadCategoryImage($category_id);
            }
            Session::set('success-message', 'Category Edited Successfully!');

            header('Location: list-categories.php'); 
        }
        public function saveAndUploadCategoryImage($category_id){

            $dir = "../../assets/category_$category_id";
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }

            $dir = $dir."/".basename($_FILES["cover_image"]["name"]);
            
            move_uploaded_file($_FILES["cover_image"]["tmp_name"], $dir);

            $image_info = [
                'img_path' => str_replace('../../','',$dir),
                'img_ref_category' => $category_id
            ];

            $this->crud->create($image_info, 'imagesCategory');
        }





    }
    


?>
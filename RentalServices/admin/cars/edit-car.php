<?php 
    include_once "../config/Session.php";

    Session::start();
    include_once "../config/CarController.php";

    $carController = new CarController();

    $car = $carController->getCar($_GET['id']);
    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
        $carController->editCar($_GET['id']);

        // $carController->addCar();
         
    }



?>
<?php include "../includes/sidebar.php" ?>



                <div class="row">
        <div class="col-sm-12">
            <div id="add-movie-header">
            <style>
                    
                    #add-movie-header{
                        font-weight:bold; 
                        color:black;
                        background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
                    }
                </style>
                <h4>Edit Car</h4>
            </div>
            <div id="add-movie-form-container">
                <form class="form-horizontal" method="post" id="edit-car-form" action='' autocomplete="off" enctype="multipart/form-data" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="" name="car_name" value="<?= $car[0]['car_name'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Price:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="title" placeholder="" name="car_price" value="<?= $car[0]['car_price'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Rental:</label>
                        <div class="col-sm-10">
                            <?php                             
                            include_once "../config/Crud.php";
                                $crud = new Crud();

                                $rentals = $crud->read('SELECT * FROM rentals', false);
                                $current_rental = $car[0]['rental_name'];
                            ?>
                        
                            <select data-placeholder="Select Rental..."  class="form-control rental"  name="rentals" id="rental" value="">
                                <?php foreach($rentals as $rental){ ?>

                                    <option value="<?=$rental['rental_id']?>"><?=$rental['rental_name']?></option>

                                <?php } ?>

                                    <option value="<?= $rental['rental_id'] ?>" selected="selected"><?=$rental['rental_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Brand:</label>
                        <div class="col-sm-10">
                        <?php                             
                            include_once "../config/Crud.php";
                                $crud = new Crud();

                                $brands = $crud->read('SELECT * FROM brands', false);
                                $current_brand = $car[0]['brand_name'];
                            ?>
                        
                            <select data-placeholder="Select Brand..."  class="form-control brand"  name="brands" id="brand" value="">
                                <?php foreach($brands as $brand){ ?>

                                    <option value="<?=$brand['brand_id']?>"><?=$brand['brand_name']?></option>

                                <?php } ?>

                                    <option value="<?= $brand['brand_id'] ?>" selected="selected"><?=$brand['brand_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Category:</label>
                        <div class="col-sm-10">
                        <?php                             
                            include_once "../config/Crud.php";
                                $crud = new Crud();

                                $category = $crud->read('SELECT * FROM category', false);
                                $current_category = $car[0]['category_name'];
                            ?>
                        
                            <select data-placeholder="Select Category..."  class="form-control category"  name="category" id="category" value="">
                                <?php foreach($category as $categoryy){ ?>

                                    <option value="<?=$categoryy['category_id']?>"><?=$categoryy['category_name']?></option>

                                <?php } ?>

                                    <option value="<?= $categoryy['category_id'] ?>" selected="selected"><?=$categoryy['category_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available From:</label>
                        <div class="col-sm-10">
                            <input id="datepicker" name="car_start" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="<?= $car[0]['car_start'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available To :</label>
                        <div class="col-sm-10">
                            <input id="datepickerEnd" name="car_end" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="<?= $car[0]['car_end'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Cover Image:</label>
                        <div class="col-sm-10">
                            <img src="../../<?= $car[0]['img_path'] ?>" width="194" height="259" style="margin-buttom:15px" alt="">
                            <input type="file" name="cover_image" class="form-control" id="customFile" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn pull-right">Submit</button>
                            <a href="list-cars.php" class="btn pull-right" style="margin-right: 5px;">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <?php include "../includes/footer.php" ?>

    </div>

        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="../../js/datepicker.min.js"></script>
<script src="../../js/datepicker.en.js"></script>
<script src="../../js/chosen.jquery.js"></script>


<script>
    $('#datepicker').datepicker({
        language: 'en',
    })    
    $('#datepickerEnd').datepicker({
        language: 'en',
    })
    $('.category').chosen('Select Category')
    $('.brand').chosen('Select Brand')
    $('.rental').chosen('Select Category')

</script>

</body>
</html>
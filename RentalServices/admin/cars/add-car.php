<?php 
    include_once "../config/Session.php";

    Session::start();

    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
        include_once "../config/CarController.php";

        $carController = new CarController();
        $carController->addCar();
         
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
                <h4>Add Car</h4>
            </div>
            <div id="add-movie-form-container">
                <form class="form-horizontal" method="post" id="add-car-form" action='' autocomplete="off" enctype="multipart/form-data" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="" name="car_name" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Price:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="title" placeholder="" name="car_price" value="">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Rental:</label>
                        <div class="col-sm-10">
                            <select data-placeholder="Select Rental(s)..."  class="form-control rental"  name="rentals" id="rental">
                                <?php 
                                include_once "../config/Crud.php";
                                $crud = new Crud();

                                $rentals = $crud->read('SELECT * FROM rentals');

                                foreach($rentals as $key => $rental){ ?>
                                    
                                    <option value="<?=$rental['rental_id']?>"><?=$rental['rental_name']?></option>

                                <?php } ?>
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Brand:</label>
                        <div class="col-sm-10">
                            <select data-placeholder="Select Brand(s)..."  class="form-control brand"  name="brands" id="brand">
                                <?php 
                                    include_once "../config/Crud.php";

                                    $crud = new Crud();

                                    $brands = $crud->read("SELECT * FROM brands");
                                    
                                    foreach($brands as $key => $brand){ ?>
                                        <option value="<?=$brand['brand_id']?>"><?=$brand['brand_name']?></option>                                                                  
                                 <?php } ?>    
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Category:</label>
                        <div class="col-sm-10">
                            <select data-placeholder="Select Category(s)..."  class="form-control category"  name="category" id="category">
                            <?php 
                                    include_once "../config/Crud.php";

                                    $crud = new Crud();

                                    $category = $crud->read("SELECT * FROM category");
                                    
                                    foreach($category as $key => $categories){ ?>
                                        <option value="<?=$categories['category_id']?>"><?=$categories['category_name']?></option>                                                                  
                                 <?php } ?>    
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available From:</label>
                        <div class="col-sm-10">
                            <input id="datepicker" name="car_start" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available To :</label>
                        <div class="col-sm-10">
                            <input id="datepickerEnd" name="car_end" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Cover Image:</label>
                        <div class="col-sm-10">
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
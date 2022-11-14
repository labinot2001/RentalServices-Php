<?php 
    include_once "../config/Session.php";

    Session::start();
    include_once "../config/BrandController.php";

    $brandController = new BrandController();

    $brand = $brandController->getBrand($_GET['id']);
    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
        $brandController->editBrand($_GET['id']);

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
                <h4>Edit Brand</h4>
            </div>
            <div id="add-movie-form-container">
                <form class="form-horizontal" method="post" id="edit-car-form" action='' autocomplete="off" enctype="multipart/form-data" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Brand Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="" name="brand_name" value="<?= $brand[0]['brand_name'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div>                   
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Cover Image:</label>
                        <div class="col-sm-10">
                            <img src="../../<?= $brand[0]['img_path'] ?>" width="194" height="259" style="margin-buttom:15px" alt="">
                            <input type="file" name="cover_image" class="form-control" id="customFile" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn pull-right">Submit</button>
                            <a href="list-brands.php" class="btn pull-right" style="margin-right: 5px;">Back</a>
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
<?php 
    include_once "./admin/config/Session.php";

    Session::start();
    include_once "./admin/config/CarController.php";

    $carController = new CarController();

    $car = $carController->getCar($_GET['id']);

?>
<?php include "./includes/header.php" ?>
<hr>

<h1 style="margin-left:180px;padding-bottom:20px;padding-top:10px; color: gray">Product Details</h1>
    <div class="flexii">
        <div class="imageii">
            <img src="./<?= $car[0]['img_path'] ?>" alt="">
        </div>
        <div class="contentii">
            <div class="contentNameii">
                <h2>Car Name  </h2> 
                <p class="data">Price </p>
                <p class="data">Rental </p>
                <p class="data">Brand </p>
                <p class="data">Category </p>
                <p class="data">Due Date</p>
                <form action="cart.php" class="product__add" method="post">
                    <input type="hidden" name="car_id" value="<?= $car[0]['car_id']?>">                  
                    <input type="hidden" name="car_name" value="<?= $car[0]['car_name']?>">
                    <input type="hidden" name="car_price" value="<?= $car[0]['car_price']?>">
                    <input type="hidden" name="car_start" value="<?= $car[0]['car_start']?>">
                    <input type="hidden" name="car_end" value="<?= $car[0]['car_end']?>">
                    <input type="hidden" name="img_path" value="<?= $car[0]['img_path']?>">
                    <input style="margin-top: 40px;height: 40px;width: 100%;font-weight: bold;
                    background-image: linear-gradient(to right top, #01ed04, #00d520, #00bd2a, #00a62e, #008f30);" 
                    type="submit" value="Add To Cart" name="add_to_cart" class="cart-btn" />
                </form>
            </div>
            <div class="contentFill">
                <h2 class="datah2">: <?= $car[0]['car_name'] ?></h2> 
                <p class="dataFill">: <?= $car[0]['car_price'] ?> EURO/DAY</p>
                <p class="dataFill">: <?= $car[0]['rental_name'] ?></p>
                <p class="dataFill">: <?= $car[0]['brand_name'] ?></p>
                <p class="dataFill">: <?= $car[0]['category_name'] ?></p>
                <p class="dataFill">: <?= $car[0]['car_start'] ?> / <?= $car[0]['car_end'] ?></p>
                <p style="" class="product__price">
                    <button style="margin-top: 40px;width: 67%; height: 40px;
                    background-image: linear-gradient(to right top, #8eed01, #a4e200, #b5d700, #c2cc00, #ccc114); ">
                    <a style="text-decoration:none; color:rgb(0, 0, 0);font-weight: bold;text-align: center;" 
                    href="car.php">Back to Offers</a></button>
                </p>
            </div>

            
        </div>
        

    </div>

 
    <?php include "./includes/footer.php" ?>

    </div>

        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="./js/datepicker.min.js"></script>
<script src="./js/datepicker.en.js"></script>
<script src="./js/chosen.jquery.js"></script>


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
<?php include("includes/header.php"); ?>
    <body>
    <?php 
      include_once "./admin/config/CarController.php";

      $carController = new CarController();

      $cars = $carController->getCars();
                
    ?>

        <div class="Car-products">
        <?php foreach($cars as $key => $car){ ?>

            <div class="product" >
              <div class="formBtn">
                <img src="./<?=$car['img_path'] ?>" alt="cover" class="product__cover">
                <form action="cart.php" class="product__add" method="post">
                  <input type="hidden" name="car_id" value="<?= $car['car_id']?>">                  
                  <input type="hidden" name="car_name" value="<?= $car['car_name']?>">
                  <input type="hidden" name="car_price" value="<?= $car['car_price']?>">
                  <input type="hidden" name="car_start" value="<?= $car['car_start']?>">
                  <input type="hidden" name="car_end" value="<?= $car['car_end']?>">
                  <input type="hidden" name="img_path" value="<?= $car['img_path']?>">
                  <input style="font-weight: bold;background-image: linear-gradient(to right top, #14bba7, #1ebba6, #25bca6, #2cbca5, #31bca5, #31bea6, #31bfa6, #31c1a7, #2cc5aa, #26c9ac, #1eceaf, #14d2b1); height:30px;" 
                    type="submit" value="Add To Cart" name="add_to_cart" class="cart-btn" />
                </form>
              </div>
             <h2 style="margin-top:5px; text-align: center;" class="product__title"><?= $car['car_name'] ?></h2>
              <p style="margin-top:10px; text-align: center;" class="product__price">
                <span style="color:#CE3175; font-size:20px; font-weight:bold;" class="product__amount"><?= $car['car_price'] ?> Euro/Day</span>
              </p>
              <p style="margin-top:10px; text-align: center;" class="product__price">

                <button style="
                background-image: linear-gradient(to right top, #14bba7, #1ebba6, #25bca6, #2cbca5, #31bca5, #31bea6, #31bfa6, #31c1a7, #2cc5aa, #26c9ac, #1eceaf, #14d2b1); height:30px;
                width:60%;margin-top:5px;">
                <a style="text-decoration:none; color:white;font-weight: bold;text-align: center;" 
                href="detailCar.php?id=<?= $car['car_id']?>">Show Detials</a></button>
              </p>
            </div>
        <?php } ?>
          </div> 
<?php include("includes/footer.php"); ?>
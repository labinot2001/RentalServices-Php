<?php include("includes/headerHome.php"); ?>
            
<div class="detailSection">
        <div class="foto1"></div>
        <div class="foto2"></div>
        <div class="foto3"></div>
    </div>
    <!-- <div id="slideshow">
        <div class="TopSection0">
            <h4 class="h4-section">FIND YOUR CAR TODAY!</h4>
            <h1 class="h1-section">BOOK THE BEST CAR FOR YOU!</h1>
        </div>
        <div class="TopSection1">
            <h4 class="h4-section">FIND THE BEST VARIANTS!</h4>
            <h1 class="h1-section">A LOT OF VARIANTS AVAILIABLE!</h1>
        </div>
        <div class="TopSection2">
        </div>
    </div> -->
    <ul id="slides">
        <li class="slide showing">
            <h4 class="h4-section">FIND YOUR CAR TODAY!</h4>
            <h1 class="h1-section">BOOK THE BEST CAR FOR YOU!</h1>
        </li>
        <li class="slide">
            <h4 class="h4-section">FIND THE BEST VARIANTS!</h4>
            <h1 class="h1-section">A LOT OF VARIANTS AVAILIABLE!</h1>
        </li>
        <li class="slide"></li>
        <!-- <li class="slide">Slide 4</li>
        <li class="slide">Slide 5</li> -->
    </ul>
    <div class="offers">
    <?php 
      include_once "./admin/config/CarController.php";

      $carController = new CarController();

      $cars = $carController->getCars();
                
    ?>
        <div class="offers1">
            <h2>Rent <br> a perfect car <br> for any occasion</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad facere architecto asperiores hic.</p>
            <button><a style="text-decoration:none; color:white;" href="./car.php">Let's go</a></button>
        </div>
        
        <?php $count = 0;
         foreach($cars as $key => $car){  
             $count++;
             if($count==3)
                break;
         ?>
            
        <div class="offers2">
            <img style="width: 40px; height: 60px; margin: 1em; position:absolute" src="./assets/ribbon.png" alt="">
            <img src="./<?=$car['img_path'] ?>" style="height:55%;width:100%;border-top-left-radius:11%;border-top-right-radius:11%">
            <h2><?= $car['car_name'] ?></h2>
            <h6 style="color:#CE3175;font-size:20px;font-weight:bold;"><?= $car['car_price'] ?> Euro/Day</h6>
            <p>Due Data:</p>
            <h6><?= $car['car_start'] ?> <i style="font-style:normal;color:#CE3175;"> / </i><?= $car['car_end']?></h6>
            <br>
            <button><a style="text-decoration:none; color:white;" href="./detailCar.php?id=<?= $car['car_id'] ?>">View Deal</a></button>
        </div>
        <?php  } ?>

    </div>
<?php include("includes/footer.php"); ?>


<?php 
    session_start();
    if(isset($_POST['add_to_cart'])){
    //DMTH qe eshte nje produkt ne cart
        if(isset($_SESSION['cart'])){
            

            
            $_SESSION["prev-value"] = $_SESSION["value"] ?? '';
            $_SESSION["value"] = $_POST['car_start'];

            $_SESSION["prevv-value"] = $_SESSION["valuee"] ?? '';
            $_SESSION["valuee"] = $_POST['car_end'];
            
            $cars_array_ids = array_column($_SESSION['cart'],"car_id");


            if(!in_array($_POST['car_id'],$cars_array_ids)){
                //add product to cart
                $car_id = $_POST['car_id'];


                $car_array = array(
                    'car_id'=>$car_id,              
                    'car_name'=>$_POST['car_name'],
                    'car_price'=>$_POST['car_price'],
                    'car_start'=>$_POST['car_start'],
                    'car_end'=>$_POST['car_end'],
                    'img_path'=>$_POST['img_path'],
                
                );


                $_SESSION['cart'][$car_id] = $car_array;
                //[4=>car; 44=>[]]
            }
            else{
                echo "<script> alert('Car has already been added to cart')</script>";
            }
        //first product to cart
        }else{


            $car_id = $_POST['car_id'];


            $car_array = array(
                'car_id'=>$car_id,              
                'car_name'=>$_POST['car_name'],
                'car_price'=>$_POST['car_price'],
                'car_start'=>$_POST['car_start'],
                'car_end'=>$_POST['car_end'],
                'img_path'=>$_POST['img_path'],
            
            );
;

            $_SESSION['cart'][$car_id] = $car_array;

            //[4=>car; 44=>[]]
        }


        calculateTotalCart();

    }else if(isset($_POST['remove_btn'])){
        $car_id = $_POST['car_id'];
        unset($_SESSION['cart'][$car_id]);
        calculateTotalCart();


    }else if(isset($_POST['edit_date_btn'])){
        $car_id = $_POST['car_id'];

        $car_start = $_POST['dateFrom'];
        $car_end = $_POST['dateTo'];

        $car = $_SESSION['cart'][$car_id];

        $car['car_start'] = $car_start;
        $car['car_end'] = $car_end;

        $_SESSION['cart'][$car_id] = $car;

        calculateTotalCart();



    }else if(isset($_POST['reset_btn'])){


        $car_id = $_POST['car_id'];

        $car = $_SESSION['cart'][$car_id];

        $car['car_start'] = $_SESSION["value"];
        $car['car_end'] = $_SESSION["valuee"];


        $_SESSION['cart'][$car_id] = $car;


        calculateTotalCart();


    }else{

    }

    function calculateTotalCart(){
        $total_price = 0;
        $total_days = 0;

        foreach($_SESSION['cart'] as $id=>$car){
            $car = $_SESSION['cart'][$id];

            $price = $car['car_price'];

            $days = (round((strtotime($car['car_end']) - strtotime($car['car_start'])) / (60 * 60 * 24)));

            $total_price= $total_price + ($price * $days);
            $total_days = $total_days + $days;
            
        }
        $_SESSION['total'] = $total_price;
        $_SESSION['days'] = $total_days;
    }



    include "./includes/header.php";

?>

    <section class="cart container mt-5 my-3 py5">
        <div class="container mt-5">
            <h2 class="font-weight-bold" style="color:#fff">Your Cart</h2>
            <hr style="border-top: 3px solid #fff;">
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>                
                <th>Duration Date</th>
                <th>Subtotal</th>
            </tr>
            
            <?php if(isset($_SESSION['cart'])){ ?>

            <?php foreach($_SESSION['cart'] as $key => $value){ ?>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="./<?= $value['img_path'] ?>" alt="">
                        <div>
                            <p><?= $value['car_name'] ?></p>
                            <small><span></span><?= $value['car_price']?> €/day</small>
                            <br>
                            <form style="margin-top: 10px;" method="post">
                                <input type="hidden" name="car_id" value="<?= $value['car_id']?>" id="">
                                <input type="submit" class="remove-btn" name="remove_btn" value="remove">
                            </form>
                        </div>
                    </div>
                </td>
                <td style="font-size: 1.25rem; color:#fff; ">
                    <form action="cart.php" method="post">
                        <div class="inputs">
                            <input style="width:68%" type="hidden" name="car_id" value="<?= $value['car_id']?>">
                            from <br>
                            <input style="width:68%" type="date" name="dateFrom" min="<?= $value['car_start']?>" max="<?= $value['car_end']?>" value="<?= $value['car_start']?>"> <br>
                            to <br>
                            <input style="width:68%"  type="date" name="dateTo" min="<?= $value['car_start']?>" max="<?= $value['car_end']?>" value="<?= $value['car_end']?>"> <br> <br>
                            <input type="submit" value="Save date" class="edit-btn" name="edit_date_btn">
                            or 
                            <button type="submit" class="reset-btn"  name="reset_btn">
                                <i class="fa fa-undo" aria-hidden="true"></i> Reset
                            </button>
                        </div>            
                    </form>
                </td>

                <td>
                    
                    <span class="product-price"><?= $value['car_price'] * (round((strtotime($value['car_end']) - strtotime($value['car_start'])) / (60 * 60 * 24))) ?> € </span>
                </td>
                
            </tr>  
            
            <?php }?>
            <?php }?>
        </table>

        <div class="cart-total">
            <a class="aelement" href="./car.php">Add more Cars</a>

            <table>
                <tr>
                    <td style="color: #fff;">Total</td>
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <td><?= $_SESSION['total'] ?> €</td>
                    <?php } ?>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <form action="./checkout.php">
                <input type="submit" class="btn checkout-btn" value="Checkout">
            </form>
        </div>

    </section>




<?php 

    include "./includes/footer.php";

?>
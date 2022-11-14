<?php include "./includes/header.php";
    session_start();

?>
    <div style="padding:100px">
    <h1 style="text-align:center;color:white;padding:40px;">Value: <?= $_SESSION['total'] ?> € </h1>
        <a style="margin:455px" href="./complete.php"><button  class="btn btn-success">Complete Order</button></a>
    </div>

<?php include "./includes/footer.php" ?>
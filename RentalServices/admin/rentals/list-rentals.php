<?php 
    include_once "../config/Session.php";

    Session::start();

?>

<?php include "../includes/sidebar.php" ?>
 
            <div id="users-container">
                <div id="pagination-container">
                    <ul style="display:flex; position:relative;margin-top:6px">
                        <li>Show</li>
                        <li>
                            <select name="per_page" id="per_page">
                                <option >5</option>
                                <option selected>10</option>
                                <option  >15</option>
                                <option >20</option>
                            </select>
                        </li>
                        <li>entries</li>
                    </ul>
                    <ul style="display:flex;margin-left: auto" class="paginator-ul">
                        <li class='page-item active'>
                            <a class = 'page-link'  href='#' class = 'page-link'>1</a>
                        </li><li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>2</a>
                        </li>
                        <li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>3</a>
                        </li>                    
                    </ul>
                </div> 
                <div id ="add-btn-container">
                    <div class = "sidebar-row">
                        <a href="add-rental.php" class = "btn btn-add">
                        <i class="fas fa-plus"></i>
                        Add New Rental</a>
                    </div>    
                </div>           
                <?php 
                    include_once "../config/RentalController.php";

                    $rentalController = new RentalController();

                    $rentals = $rentalController->getRentals();
                
                ?>
                <table id="movies">
                <style>
                        .btn.btn-add{
                            background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
                        }
                        #movies th {
                            font-weight:bold; 
                            color:black;
                        }
                    </style>
                    <tr>
                        <th>Rental Name</th> <th>Cover Imagge</th> <th>Actions</th>
                    </tr>
                        <?php foreach($rentals as $key => $rental){ ?>
                            
                            <tr>
                                <td><?= $rental['rental_name'] ?></td>
                                <td style="width:15px"><img src="../../<?=$rental['img_path'] ?>" height="100%" width="100%"></td>
                                <td style="width:15px;">
                                    <a href="edit-rental.php?id=<?= $rental['rental_id']?>">Edit</a> <br> <hr style="border-top: 2px solid black;">
                                    <a style="color:red;" class="links" href="deleteRental.php?id=<?= $rental["rental_id"] ?>">Delete</a>        
                                </td>     
                            </tr>   
                        <?php } ?>
                     
                </table>
            </div>            
        </div>
        <?php include "../includes/footer.php" ?>

            </div>

        </div>
    </div>
</div>
    </div>
    <script src="../../js/jquery.toast.min.js"></script>
    <?php if(Session::exists('success-message')){?>
    <script>
        $.toast({
            heading: 'Information',
            text: '<?= Session::get('success-message')?>',
            showHideTransition: 'slide',
            icon: 'info',
            position: 'bottom-right'
        })
    </script>
    <?php } 
    Session::destroy('success-message');
    ?>
</body>
</html>
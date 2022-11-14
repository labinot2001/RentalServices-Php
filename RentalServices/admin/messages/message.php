<?php include "../includes/sidebar.php" ?>
     <div >
         <div >
             <h2 class="border-bottom border-secondary pb-1" style="text-align:center;margin-top:20px;font-weight:bold; font-size:22px;">Customers All Messages</h2>
             <div style="display:flex;flex-direction:row; flex-wrap:wrap; justify-content:center">
                 <?php
                   define("DB_HOST", "localhost");
                   define("DB_USER", "root");
                   define("DB_PASSWORD", "");
                   define("DB_DATABASE", "carrental");
                   $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                 $sql="SELECT * FROM `contactform` ";
                 $query=mysqli_query($db,$sql);
                
                 while($row= mysqli_fetch_assoc($query)){
                    $EmailOrUsername=$row['email_or_username'];
                    $message=$row['message_text'];
                
                ?>
                 <div style="height:190px;border-top-width: 2px;
                            border-right-width: 4px;
                            border-bottom-width: 6px;
                            border-left-width: 8px;
                            border-top-style: solid;
                            border-right-style: dotted;
                            border-bottom-style: dashed;
                            border-left-style: groove;
                            border-top-color: #006100;
                            border-right-color: #050116;
                            border-bottom-color: #2ecc71;
                            border-left-color: #3498db; margin:20px">
                    <div style="border-radius: 5px ; 
                            box-shadow: 0px 30px 40px -20px var(--grayishBlue);
                            padding: 30px;
                            margin: 20px;" class="box orange">
                        <h2><b>Name:</b>  <?php echo $EmailOrUsername; ?></h2>
                        <p><b>Message:</b>  <?php echo $message; ?></p>
                        <img style="float: right;" src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
                    </div>
                </div>
                 <?php } ?>
             </div>
         </div>
     </div>
</body>
</html>
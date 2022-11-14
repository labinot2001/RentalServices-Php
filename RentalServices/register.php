 <html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sing Up</title>
</head>

<body class="register-body">
<<<<<<< Updated upstream
    <a class="loginTop" href="./index.php"><b>CAR <span style="color: #e4461f;">RENTAL</span></b></a>
    <div class="register-box">
        <h1>Sing Up</h1> <br>

                      <!-- action="./login.php"-->
        <form id="register" action="LoginVerify.php"  onsubmit="return validationRegister()" method="post">
            <label class="labelRegister">Username (*)</label> <input class="inputi" id="userId" type="text"name="register-name" required> <br>
            <span id="userError"></span> <br>
            <label class="labelRegister">E - Mail (*)</label> <input type="email" name="email"id="emailId" class="inputi" required> <br>
            <span id="emailError"></span> <br>
            <label class="labelRegister">Birthday</label>
            <input class="inputi" id="data" type="date"> <br> 
            <!-- <span style="color: red; font-size:medium;" id="birthError"></span> <br> -->
            
             <label class="labelRegister">Password (*)</label>
            <input class="inputi" id="pass" type="password" name="register-password" required> <br>
            <span id="passError"></span> <br>
            <label class="labelRegister">Confirm Password (*)</label>
            <input class="inputi" id="passConfirm" type="password"> <br>
            <span id="confirmPassError"></span> <br>
            <label class="labelRegister">Phone Number (*)</label>
            <input class="inputi" id="numeriTel" type="number"> <br>
            <span id="numError"></span> <br>
            <label class="labelRegister">Have account? <a style="color: rgb(14, 88, 247);" href="./login.php ">Sing In
                    here!</a></label> <br>
            <input type="submit" name="register-btn"id="register-button" class="submit" value="Sing Up" style="color: white;">
        </form>
=======
    <div style="margin: 40px 0 0 40px">
        <a  class="loginTop" href="./index.php"><b>CAR <span style="color: #e4461f;">RENTAL</span></b></a>
    </div> <br> <br> <br>
    <form action="./login.php" onsubmit="return validationRegister()">

        <div class="register-box">
            <h1 style="color:white; text-align:center;">Sing Up</h1> <br> <br>
            <div class="register-innerBox">
                    <div>
                        <label class="labelRegister">Username (*)</label> <br> <br>
                        <input class="inputi" id="userId" type="text"> <br>
                        <span id="userError"></span> <br>
                    </div>
                    <div>
                        <label class="labelRegister">E - Mail (*)</label> <br> <br>
                        <input type="text" id="emailId" class="inputi"> <br>
                        <span id="emailError"></span> <br>
                    </div>
                    <div>
                        <label class="labelRegister">Password (*)</label> <br> <br>
                        <input class="inputi" id="pass" type="password"> <br>
                        <span id="passError"></span> <br>
                    </div>
                    <div>
                        <label class="labelRegister">Confirm Password (*)</label> <br> <br>
                        <input class="inputi" id="passConfirm" type="password"> <br>
                        <span id="confirmPassError"></span> <br>
                    </div> 
                    <div class="shrink">
                        <label class="labelRegister">Birthday (*)</label> <br> <br>
                        <input class="inputi" id="data" type="date"> <br>
                        <span style="color: red; font-size:medium;" id="birthError"></span> <br>
                    </div>           
                    <div class="shrink">
                        <label class="labelRegister">Phone Number (*)</label> <br> <br>
                        <input class="inputi" id="numeriTel" type="number"> <br>
                        <span id="numError"></span> <br>
                    </div>   
                    <div>
                        <label class="labelRegister">Have account? 
                            <a style="color: rgb(14, 88, 247);" href="./login.php ">Sing In
                                here!</a></label> <br> <br>
                        <input type="submit" id="submitButton" class="submit" value="Sing Up" style="color: white;"> 
                    </div>    
            </div>
                           
        </div>
                
    </form>
>>>>>>> Stashed changes


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/validimi.js"></script>
</body>

</html> 



 <!-- 

</form>
          <form id="register" action="LoginVerify.php"class="input-group" method="post">
            <input type="text" name="register-name" class=" register-input input-field" placeholder="Name" required>
            <input type="email"name="email" class=" register-input input-field" placeholder="Eamil" required>
            
            <input type="password" name="register-password"class=" register-input input-field" placeholder=" Password" required>
            <input type="checkbox" class="chech-box po"><span>i agree to the terms and conditions</span>
            <button type="submit" name="register-btn"id="register-button" class="submit-btn">register</button>
        </form>


  -->
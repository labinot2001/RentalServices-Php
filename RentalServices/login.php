<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sing In</title>
</head>

<body class="login-body">
    <a class="loginTop" href="./index.php"><b>CAR <span style="color: #e4461f;">RENTAL</span></b></a>
    <div class="login-box">
        <h1>Sing In</h1> <br>
              <!-- action="./index.html" -->
        <form  action="LoginVerify.php" onsubmit="return validationLogin()"  method="post">
            <label>Email or Username</label> <input class="inputi" id="user" type="text" name="name"required> <br> <span
                id="userError"></span> <br>
            <label>Password</label> <input class="inputi" id="pass" type="password" name="password" required> <br> <span id="passError"></span>
            <br>
            <label>Not registred? <a style="color: rgb(14, 88, 247);" href="./register.php">Register here!</a></label>
            <br>
            <input id="loginBtn" name="submit-btn"  style="color: white;" class="submit" type="submit"  value="Sing In">
        </form>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/validimi.js"></script>

</body>

</html>
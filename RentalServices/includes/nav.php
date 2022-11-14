    <header>
        <div class="logo">
            <a style="color:white;" href=""><b>CAR <span>RENTAL</span></b></a>
        </div>
        <div class="content-nav">
            <nav class="nav">
            <ul class="myUl"  id="test-nav-ul">
                    <li><a class="a-bottom" href="./index.php">Home</a></li>
                    <li><a class="a-bottom <?php echo ($_SERVER['PHP_SELF'] == "/Course/car.php" ? "active" : "");?>" href="./car.php">Cars</a></li>
                    <li><a class="a-bottom <?php echo ($_SERVER['PHP_SELF'] == "/Course/about.php" ? "active" : "");?>" href="./about.php">About</a></li>
                    <li><a class="a-bottom <?php echo ($_SERVER['PHP_SELF'] == "/Course/contact.php" ? "active" : "");?>" href="./contact.php">Contact</a></li>
                    <li><a class="a-bottom" href="./register.php">Register</a></li>
                    <li><a class="a-bottom" href="./login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
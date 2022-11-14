<?php include("includes/header.php"); ?>
<body class="bodyContact">

    <div class="formBox">
        <h1>Contact Us</h1>
        <?php if(isset($_GET['sent_succ'])): ?>
        <div class="alert alert-success" role="alert" style="text-align:center; color: green; height: 50;">
            Message sent Successfully
            <script LANGUAGE='JavaScript'>
             setTimeout(function () {
             window.location.href = "./contact.php"; //will redirect to your blog page (an ex: blog.html)
            }, 2000);            
    </script>
        </div>
        <?php endif ?>
        <form action="./process.php" method="POST" onsubmit="return validationContact()">
            <label>Email or Username</label> <br> <input class="inputi" type="text" name="email-or-username" id="user" > <br> <span
                id="userError"></span> <br>
            <label>Message</label> <br>
            <textarea name="message" id="message" rows="5" cols="60" name="description">
            </textarea><br> <span id="messageError"></span> <br>
            <input style="background-color: blue; color: white; " type="submit" id="submitButton" class="submitContact"
                value="Send" name="click_send" style="color: white;">
        </form>
    </div>

<?php include("includes/footer.php"); ?>
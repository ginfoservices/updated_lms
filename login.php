<?php
$page_title = "LMS - Login";

require_once 'includes/header.php';
?>

<div class="container">



    <form id="login" method="post" action="user-login.php">
        <div id="message"></div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="txt_uname" name="username" placeholder="Enter username"
                required>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="txt_pwd" name="password" placeholder="Password" required>
        </div>
        <button type="submit" id="but_submit" class="btn btn-primary">Submit</button>
    </form>


</div>



<?php
require_once 'includes/footer.php';
?>
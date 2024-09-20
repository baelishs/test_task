<?php

if (!empty($_POST)) {
    if ($_POST['pass'] == $_POST['passCheck']) {
        require_once 'captcha.php';
        if (!check_captcha($_POST['smart-token'])) {
            $output = "You are logged in now! :D";
            signUp();
        } else {
            $output = "You have to pass the captcha! >:(";
        }
    } else {
        $output = "Incorrect name or password! >:(";
    }
}
?>
<form method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" required>
    </div>
    <div class="mb-3">
        <label for="password1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password1" required>
    </div>
    <div id="captcha-container" class="smart-captcha" data-sitekey="ysc1_PvMAj2UmKRurKeeSlw7UrZJakujLSgacMK3XsBAX760b6625">
        <input type="hidden" name="smart-token" value="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

    print_r($_POST);

        function signUp() {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['pass'];

            query("INSERT INTO `users` (`name`, `email`, `phone`, `password`) VALUES ('$username', '$email', '$phone', '$password')");
        }

    if(!empty($_POST)) {
        if($_POST['pass'] == $_POST['passCheck']) {
            signUp();
        } else {
            echo "<h3> Passwords must match! </h3>" ;
        }
    }
?>

<form method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" required>
    </div>
    <div class="mb-3">
        <label for="passCheck" class="form-label">Repeat password</label>
        <input type="password" class="form-control" id="passCheck" name="passCheck" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
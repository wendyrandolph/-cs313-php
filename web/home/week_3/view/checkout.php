<?php
session_start(); 
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <form action="/web/home/week_3/checkout/index.php" method="post">
        <label>First Name:</label><br>
        <input type="text" name="clientFirstname" class="input" id="clientFirstName" <?php if (isset($clientFirstname)) {
                                                                                            echo "value='$clientFirstname'";
                                                                                        }  ?> required><br><br>
        <label>Last name:</label><br>
        <input type="text" class="input" name="clientLastname" <?php if (isset($clientLastname)) {
                                                                    echo "value='$clientLastname'";
                                                                } ?> required><br><br>
        <label>Email:</label><br>
        <input type="email" class="input" name="clientEmail" <?php if (isset($clientEmail)) {
                                                                    echo "value='$clientEmail'";
                                                                } ?> required><br><br>
        <input type="password" class="input" name="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br><br>
        <input type="submit" value="Checkout" class="checkout"><br><br>
        <!--Add the action name - value pair -->
        <input type="hidden" name="action" value="checkout">



    </form>
</body>

</html>
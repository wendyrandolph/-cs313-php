<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://kit.fontawesome.com/0e472b3e20.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/web/home/css/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/web/home/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/web/home/css/week_3.css" media="screen" />
</head>

<body>
    <header class="header">
        <?php require $_SERVER['DOCUMENT_ROOT'] . './web/home/snippets/header.php'; ?>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . './web/home/snippets/nav.php'; ?>
        </nav>
    </header>
    <div class="page-title">
        <h2> BROWSE PRODUCTS </h2>
        <nav class="cart"> 
        <ul>
            <li><a href='/web/home/week_3/view/cart.php'>Home</a></li>
            <li><a href='/web/home/week_3/view/cart.php'>View Cart</a></li>
            <ul>
                </nav>
    </div>
    <div> 

            <h4> <?php if(isset($_SESSION['message'])){ 
                echo $_SESSION['message']; 
            } ?> 
            </h4> 

        </div>
    <main class="browse">
 
        <!-- Product #1 -->
        <?php
        
        echo $view;
        ?>







    </main>
    <footer>
        <div class"footer">
            <?php require './web/home/snippets/footer.php';  ?>
        </div>

</body>

<?php unset($_SESSION['message']); ?> 
<?php unset ($_SESSION['message_clear']);  ?> 
</html>

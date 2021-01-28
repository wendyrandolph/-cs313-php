<<<<<<< HEAD

=======
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://kit.fontawesome.com/0e472b3e20.js" crossorigin="anonymous"></script>

<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="/web/home/css/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/web/home/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/web/home/css/week_3.css" media="screen" />
=======
    <link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/week_3.css" media="screen" />
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
</head>

<body>
    <header class="header">
<<<<<<< HEAD
        <?php require $_SERVER['DOCUMENT_ROOT'] . './web/home/snippets/header.php'; ?>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . './web/home/snippets/nav.php'; ?>
=======
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/header.php'; ?>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/nav.php'; ?>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
        </nav>
    </header>
    <div class="page-title">
        <h2> BROWSE PRODUCTS </h2>
        <nav class="cart"> 
        <ul>
<<<<<<< HEAD
            <li><a href='/web/home/week_3/view/cart.php'>Home</a></li>
            <li><a href='/web/home/week_3/view/cart.php'>View Cart</a></li>
=======
            <li><a href='/week_3/index.php'>Home</a></li>
            <li><a href='/week_3/index.php?action=viewCart'>View Cart</a></li>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
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
<<<<<<< HEAD
            <?php require './web/home/snippets/footer.php';  ?>
=======
            <?php require '../snippets/footer.php'; ?>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
        </div>

</body>

<?php unset($_SESSION['message']); ?> 
<?php unset ($_SESSION['message_clear']);  ?> 
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb

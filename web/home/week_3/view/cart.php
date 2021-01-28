<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>View Cart</title>

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
    <h2> Shopping Cart </h2>
    <nav class="cart">
      <ul>
<<<<<<< HEAD
        <li><a href='/web/home/week_3/index.php'>Home</a></li>
        <li><a href='/web/home/week_3/index.php?action=viewCart'>View Cart</a></li>
        <li><a href='/web/home/week_3/index.php?action=clearCart'>Clear Cart</a></li>
=======
        <li><a href='/week_3/index.php'>Home</a></li>
        <li><a href='/week_3/index.php?action=viewCart'>View Cart</a></li>
        <li><a href='/week_3/index.php?action=clearCart'>Clear Cart</a></li>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
        <input type="hidden" name="clear" value="1">
        <ul>
    </nav>
  </div>

  <div>
    <?php if (isset($_SESSION['message_clear'])) {
      echo $_SESSION['message_clear'];
    } ?>
  </div>
  <main class="browse">

    <div class="display">

   <?php if(isset($view_cart)){ 
     echo $view_cart; 
   } ?> 


    <div class="checkout">
<<<<<<< HEAD
      <a href='/web/home/week_3/index.php?action=checkout'>Check Out</a>
=======
      <a href='/week_3/index.php?action=checkout'>Check Out</a>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
    </div>
  </main>
  <footer>
    <div class="footer">
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/footer.php'; ?>
    </div>
  </footer>

</body>


</html>
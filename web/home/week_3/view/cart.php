<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>View Cart</title>

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
    <h2> Shopping Cart </h2>
    <nav class="cart">
      <ul>
        <li><a href='/web/home/week_3/index.php'>Home</a></li>
        <li><a href='/web/home/week_3/index.php?action=viewCart'>View Cart</a></li>
        <li><a href='/web/home/week_3/index.php?action=clearCart'>Clear Cart</a></li>
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
      <a href='/web/home/week_3/index.php?action=checkout'>Check Out</a>
    </div>
  </main>
  <footer>
    <div class="footer">
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/footer.php'; ?>
    </div>
  </footer>

</body>


</html>
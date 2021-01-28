<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CheckOut</title> 
  <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen"  >
  <link rel="stylesheet" type="text/css" href="../css/nav.css" media="screen"  >
  <link rel="stylesheet" type="text/css" href="../css/week_3.css" media="screen" />
</head>
</head>

<body>
<header class="header">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/header.php'; ?>
    <nav>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/nav.php'; ?>
    </nav>
  </header>
    <main class="browse"> 
  <p>Name: <?php echo $_POST["firstName"] . " " . $_POST["lastName"]; ?></p>

  <p>Email: <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo$_POST["email"]; ?></a></p>
  <p>Address: <?php echo $_POST["address"]; ?></p>
 
  <p>Purchasing the following: </p>  <br>
    
  
  </form>
</main> 
  <footer> 
  <div class="footer"> 
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/footer.php'; ?>
</div> 
  </footer>
</body>

</html>



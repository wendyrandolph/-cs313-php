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
<<<<<<< HEAD
  <title>CheckOut</title> 
  <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen"  >
  <link rel="stylesheet" type="text/css" href="../css/nav.css" media="screen"  >
=======
  <title>CheckOut</title>
  <link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"  >
  <link rel="stylesheet" type="text/css" href="/css/nav.css" media="screen"  >
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
  <link rel="stylesheet" type="text/css" href="../css/week_3.css" media="screen" />
</head>
</head>

<body>
<<<<<<< HEAD
<header class="header">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/header.php'; ?>
    <nav>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/nav.php'; ?>
=======
 <header class="header">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/header.php'; ?>
    <nav>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/snippets/nav.php'; ?>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
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
<<<<<<< HEAD
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/web/home/snippets/footer.php'; ?>
=======
  <?php require '/cs313-php/web/home/snippets/footer.php'; ?>
>>>>>>> be8a9df25589673b3eea32f408885fdd26d05ffb
</div> 
  </footer>
</body>

</html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://kit.fontawesome.com/0e472b3e20.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/styles.css" media="screen" />

</head>

<body>
    <header class="header">
        <h1> PARTY CENTRAL </h1>
        <button class="btn"><i class="fas fa-cart-plus"></i></button>
    </header>
    <main class="browse">



        <div class="shopping_cart">
            <!-- Product #1 -->

            <div class="item" id="item_1">


                <div class="image">
                    <img src="../images/item_1.jfif" alt="image of a candy corn candles" class="images">
                </div>

                <div class="description">
                    <h3 class="title"> Candy Corn Candles </h3>
                    <span>White, orange, yellow</span>
                </div>
<form action="../index.php" method="post">
                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                    <input type="submit" id="addToCart" name="submit" value="Add to cart">
                    <input type="hidden" name="action" value="addItem">
                </div>

                <div class="total-price">$10</div>
            </div>
</form> 
            <!-- Product #2 -->
            <div class="item" id="item_2">


                <div class="image">
                    <img src="../images/candle_trio.jfif" alt="image of a candy corn candles" class="images" id="second_item">
                </div>

                <div class="description">
                    <h3 class="title"> Candy Corn Candles </h3>
                    <span>White, orange, yellow</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>


            <!-- Product #3 -->
            <div class="item" id="item_3">
                <div class="image">
                    <img src="../images/birthday_balloon.jfif" alt="birthday mylar balloon" class="images">
                </div>

                <div class="description">
                    <h3 class="title"> Candy Corn Candles </h3>
                    <span>White, orange, yellow</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>


            <!-- Product #4 -->
            <div class="item" id="item_4">
                <div class="image">
                    <img src="../images/birthday_cake.jfif" alt="A circle tiered birthday cake." class="images">
                </div>

                <div class="description">
                    <h3 class="title"> Birthday Cake </h3>
                    <span>Two layer chocolate cake with fondant</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>

            <!-- Product #5 -->
            <div class="item" id="item_5">
                <div class="image">
                    <img src="../images/cake_2.jfif" alt="Picture of a cake." class="images">
                </div>

                <div class="description">
                    <h3 class="title"> Unique three tiered cake </h3>
                    <span>An experiment you're dying to try</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>

            <!-- Product #6 -->
            <div class="item" id="item_6">
                <div class="image">
                    <img src="../images/flower_balloon.jfif" alt="Photo of a balloon with flower doodles on it." class="images">
                </div>

                <div class="description">
                    <h3 class="title">Flower Balloon </h3>
                    <span>Add some balloons to your occasion</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>

            <!-- Product #7 -->
            <div class="item" id="item_7">
                <div class="image">
                    <img src="../images/tablecloth.jfif" alt="Photo of a tablecloth with colored circles on it." class="images">
                </div>

                <div class="description">
                    <h3 class="title">Table Cloth </h3>
                    <span>Add a tablecloth to jazz up your party.</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$10</div>
            </div>

            <!-- Product #7 -->
            <div class="item" id="item_7">
                <div class="image">
                    <img src="../images/elephant_hot_air_balloon.jfif" alt="A pink elephant hot air balloon. " class="images">
                </div>

                <div class="description">
                    <h3 class="title">Hot Air Balloon </h3>
                    <span>Go all out for your party this year.</span>
                </div>

                <div class="quantity">
                    <button type="button" id="add"><i class="far fa-plus-square"></i>


                    </button>
                    <input type="number" id="input" value="0">
                    <button id="minus" type="button"><i class="far fa-minus-square"></i>

                    </button>
                </div>

                <div class="total-price">$1000</div>
            </div>


        </div>

        </div>


    </main>


</body>
<script src="../js/cart.js"></script>
<script src="../js/node_modules/jquery/dist/jquery.min.js">
    < /html>
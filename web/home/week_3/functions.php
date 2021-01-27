<?php


function generateView($results, $images)
{

    $view = '';
    foreach ($results as $item) {

        //$image =  $_SESSION['image'];
        $view .= '<div>';
        $view .= "<form action='/web/home/week_3/index.php?action=addToCart&pId=$item[pId]&title=$item[title]&image=$item[image] method=POST>";
        $view .= "<div  class=item name=id value=$item[id]>";
        $view .= "<input type='hidden' name=id value=$item[id]>";
        $view .= '<div class=image >';
        $view .= "<img class=images src=$item[image]/>";
        $view .= "<input type='hidden' name=image value=$item[image]>";
        $view .= '</div>';
        $view .= '<div class="description">';
        $view .= "<h3 class=title> $item[title] </h3>";
        $view .= "<input type='hidden' name=title value=$item[title]>";
        $view .= "<span name='desc'> $item[desc] </span>";
        $view .= "<input type='hidden' name=desc value=$item[desc]>";
        $view .= '</div>';
        $view .= "<div class='quantity'>";
        //$view .= "<button type='button' id='add'><i class='far fa-plus-square'></i></button>"; 
        $view .= "<input type='hidden' name='quan' id='quan'>";
        //$view .= "<input type='hidden' name='quan' value='quan'>";
        //$view .= "<button type='button' id='minus'><i class='far fa-minus-square'></i></button>";
        $view .= '</div>';
        $view .= '<div id="addto">';
        $view .= "<input type='submit' id='addme' value='Add To Cart' onclick= addtocart() >";
        $view .= "<input type='hidden' name='pId' value=$item[pId]>";
        $view .= '</div>';
        $view .= "<div class=total-price>$item[price]</div>";
        $view .= "<input type='hidden' name=price value=$item[price]>";
        $view .= "<input type='hidden' name=total  >";
        $view .= '</div>';
        $view .= '</div>';
        $view .= '</div>';
        $view .= '</form>';
    }

    return $view;
}

function buildCart($buy_results)
{
    $view_cart = "";
    $view_cart = ' <table>';
    $view_cart = '<tr>';
    $view_cart = '<th> Item </th>';
    $view_cart =  '<th> Quantity </th>';
    $view_cart =  '<th> Price </th>';
    $view_cart = '<th> Subtotal </th>';
    $view_cart = '</tr>';
    $view_cart = '<tr>';

    //foreach ($buy_results as $items) {
        $_SESSION['buy_results'] = $buy_results;
        $price = number_format($_SESSION['cart']['price'], 2);
         $title    = $_SESSION['cart']['title'] ;  
        $image =    $_SESSION['cart']['image']; 
        $quan =     $_SESSION['cart']['quan']; 
        $view_cart .= '<td>';
        $view_cart .= "<p> $title </p><br>";
        $view_cart .= "<img src= $image </td>";
        $view_cart .= "<td><button type='button' id='add'><i class='far fa-plus-square'></i></button>";
        $view_cart .= "<input type=hidden name=quan value= $quan> </td>";
        $view_cart .= "<td><span> $price </span></td>";
        $view_cart .= "<td> SUBTOTAL </td> </br>";
        $view_cart .= '<td> THIS WILL DISPLAY THE TOTAL PRICE EVENTUALLY </td>';
        $view_cart .= '<tr>';
        $view_cart .= '</table>';
  //  }

    return $view_cart;
}

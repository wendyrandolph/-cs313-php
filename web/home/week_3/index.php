<?php

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }

    // Create or access a Session
    session_start();
    
    

  
    switch ($action) {
        case 'addItem': 
            echo "this is the add case statement"; 
            header('Location http/web/home/week_3/view/cart.php'); 
            break; 
        
       default: 
         include '../week_3/view/browse.php';
            break;
    }


    ?> 
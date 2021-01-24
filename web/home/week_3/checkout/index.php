<?php
//This is the cart controller 

// Create or access a Session
session_start();




// ------------------------------------------//

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}



//Switch statement -----------------------------//

switch ($action) {

        //Add a new review 
    case "checkout":

        // Filter and store the data

        $clientFirstName = filter_input(INPUT_POST, 'clientFirstName', FILTER_SANITIZE_STRING);
        $clientId = $_SESSION['clientFirstName']; 

        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_NUMBER_INT);



        // Check for missing data
        if (empty($reviewText)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/car_details.php';
        }

      //Send data to the database


        if ($addNewItem === 1) {
            $_SESSION['user_message'] = "Thank you for adding a new item " .  $_SESSION['clientId'];
            //add the reviews to the display
           
           
            
           
        }
        include '../index.php';
        break;


        //Add items to the cart for purchase 
    case "add_to_cart":

        // Get review Id 
        $reviewId = filter_input(INPUT_GET, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        $clientId = $_SESSION['clientData']['clientId'];

        //Get info for specified id 
        $invReviewId = getReviewById($reviewId);


        if (($invReviewId) < 1) {
            $message = 'Sorry, no review could be found.';
            echo $message;
        }

        $_SESSION['userReview'] = $invReviewId;


        $userName = substr($_SESSION['clientData']['clientFirstname'], 0, 1) . $_SESSION['clientData']['clientLastname'];
        $clientId = $_SESSION['clientData']['clientId'];
        $invId = $_SESSION['carInfo'][0]['invId'];
        $reviewText = $_SESSION['userReview'][0]['reviewText'];





        include '../view/update_review.php';
        break;


        //Handle the the review update 
    case "update":
     
        // Filter and store the data
        $reviewId = filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        $reviewText = filter_input(INPUT_POST, 'reviewText', FILTER_SANITIZE_STRING);
        $clientId = $_SESSION['clientData']['clientId'];


        // Check for missing data
        if (empty($reviewText)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
        }

        //send update to the database
        $updateReview = updateReview($reviewId, $reviewText);

        $invReview = getUserReview($clientId);
        $_SESSION['userReview'] = $invReview;

        $reviewText = $_SESSION['userReview'][0]['reviewText'];
        if ($updateReview === 1) {
            $_SESSION['update_message'] = "Thank you for updating your review.";
            // $_SESSION['updateReview'] = $updateReview;

            include '../view/admin.php';
            exit;
        } else {
            $message = "<p id='formErrorMessage'>The review failed to update, please try again.</p>";
            include '../view/review-update.php';
            exit;
        }
        // $displayReview = buildClientReviewDisplay($_SESSION['userReview']);
        include '../view/admin.php';


        break;



        //Deliver a view to confirm deletion of a review
    case "del":


        // Get review Id 
        $reviewId = filter_input(INPUT_GET, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        $clientId = $_SESSION['clientData']['clientId'];


        //Get info for specified id 
        $invReviewId = getReviewById($reviewId);
        $_SESSION['userReview'] = $invReviewId;

        $invId = $_SESSION['carInfo'][0]['invId'];
        $reviewText = $_SESSION['userReview'][0]['reviewText'];

        include '../view/review_delete.php';
        break;

        //Handle the review deletion 
    case "delete_review":

        // Filter and store the data
        $reviewId = filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_STRING);

        $clientId = $_SESSION['clientData']['clientId'];



        // Send the data to the model
        $deleteReview = deleteReview($reviewId);

        $reviewText = $_SESSION['userReview'][0]['reviewText'];
        //echo buildClientReviewDisplay($_SESSION['userReview']);

        if (($deleteReview == 1)) {

            $_SESSION['message_delete'] = "<p class='notice'>That review was successfully deleted.</p>";
            $invReview = getUserReview($clientId);
            $_SESSION['userReview'] = $invReview;
            include '../view/admin.php';
            exit;
        } else {
            $message = "<p class='notice'>Error. That review was not deleted.</p>";
            $_SESSION['message_delete'] = $message;
            header('location: /view/review_delete.php');
            exit;
        }




        break;


        //Default that will deliver the admin view of the the client is logged in or the php motors home view if not 
    default:



        if (isset($_SESSION['loggedin'])) {
            include '../view/admin.php';
        } else {
            include '../view/home.php';
        }
        exit;
        break;
}

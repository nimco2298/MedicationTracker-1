<?php

    include_once("Globals.php");
    global $controller;
    global $model;
    if(isset($_GET["logout"])){
      header("Location: index.php");

    }




    if(isset($_GET['claim_order'])){
         $order_id = $_GET['claim_order'];
         $care_giver_id = $model->getCurrentUserId;
         $controller->claimOrder($care_giver_id, $order_id);
    }

   if(isset($_GET['fulfill_order'])){
     $order_id = $_GET['fulfill_order'];
     $patient_id = $_GET['patient_id'];
     $medication_id = $_GET['medication_id'];
     $units = $_GET['units'];
     $date = gettimeofday;
     $order_status = $_POST['order_status'];
   }

?>

<?php
  session_start();
  header("Cache-Control: no-cache");

  // First, store session variables so that if there's an error on the page, the user does
  // not have to retype everything

  // Use SESSION variables on this page
  // Store posted data into SESSION variables

  if(!empty($_POST["name"]))
    $_SESSION["name"] = $_POST["name"];
  if(!empty($_POST["address"]))
    $_SESSION["address"] = $_POST["address"];
  if(!empty($_POST["city"]))
    $_SESSION["city"] = $_POST["city"];
  if(!empty($_POST["state"]))
    $_SESSION["state"] = $_POST["state"];
  if(!empty($_POST["zip"]))
    $_SESSION["zip"] = $_POST["zip"];
  if(!empty($_POST["country"]))
    $_SESSION["country"] = $_POST["country"];
  if(!empty($_POST["phone"]))
    $_SESSION["phone"] = $_POST["phone"];
  if(!empty($_POST["email"]))
    $_SESSION["email"] = $_POST["email"];
  if(!empty($_POST["comments"]))
    $_SESSION["comments"] = $_POST["comments"];

  // Then,
  // Keep people from navigating directly to this page
  // form must be posted for this page to load
  // check to see if ANY required element is empty
  if((empty($_POST["name"]))  || (empty($_POST["address"])) ||
     (empty($_POST["city"]))  || (empty($_POST["state"]))   ||
     (empty($_POST["zip"]))   || (empty($_POST["country"])) ||
     (empty($_POST["phone"])) || (empty($_POST["email"]))   ||
     (empty($_POST["comments"]))
  ) {
    $_SESSION["errorMessage"] = "* Please fill out all of the required form elements";
    header("Location:index.php");
    exit;
  }

  // For simplicity sake, if the shipping name is not filled in, copy all data from billing
  if(empty($_POST["Sname"])) {
    $_SESSION["Sname"] = $_SESSION["name"];
    $_SESSION["Saddress"] = $_SESSION["address"];
    $_SESSION["Scity"] = $_SESSION["city"];
    $_SESSION["Sstate"] = $_SESSION["state"];
    $_SESSION["Szip"] = $_SESSION["zip"];
    $_SESSION["Scountry"] = $_SESSION["country"];
  } else {
    // otherwise, if shipping data exists, stoare posted data into session variables
    $_SESSION["Sname"] = $_SESSION["Sname"];
    $_SESSION["Saddress"] = $_SESSION["Saddress"];
    $_SESSION["Scity"] = $_SESSION["Scity"];
    $_SESSION["Sstate"] = $_SESSION["Sstate"];
    $_SESSION["Szip"] = $_SESSION["Szip"];
    $_SESSION["Scountry"] = $_SESSION["Scountry"];
  }

  header("Location:displayInfo.php");

?>

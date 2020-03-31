<?php
session_start();
// Keep people from navigating directly to this page
// SESSION must be filled for this page to load
// check to see if SESSION "name" is empty
if(empty($_SESSION["name"])) {
  header("Location:index.php");
  exit;
}

// on successful load, clear the errorMessage
$_SESSION["errorMessage"] = "";

// Then below
// Use the session variables to write out the data

/////////////////
// Start Page
////////////////
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Lab 04 - displayInfo Page</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1 style="font-size:14pt; text-indent:360px;">Lab 04 - displayInfo Page</h1>
    <form id="form0" method="post" action="storeInfo.php">
      <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
          <li><span><?php echo($_SESSION["name"]);?></span></li>
          <li><span><?php echo($_SESSION["address"]);?></span></li>
          <li><span><?php echo($_SESSION["city"]);?>, <?php echo($_SESSION["state"]);?>, <?php echo($_SESSION["zip"]);?></span></li>
          <li><span><?php echo($_SESSION["country"]);?></span></li>
          <li><span><?php echo($_SESSION["phone"]);?></span></li>
          <li><span><?php echo($_SESSION["email"]);?></span></li>
          <li><span><br/>Comments:<br/><?php echo($_SESSION["comments"]);?></span></li>
        </ul>
      </fieldset>
      <fieldset id="shipping">
        <legend>Shipping Information</legend>
        <ul>
          <li><span><?php echo($_SESSION["Sname"]);?></span></li>
          <li><span><?php echo($_SESSION["Saddress"]);?></span></li>
          <li><span><?php echo($_SESSION["Scity"]);?>, <?php echo($_SESSION["Sstate"]);?>, <?php echo($_SESSION["Szip"]);?></span></li>
          <li><span><?php echo($_SESSION["Scountry"]);?></span></li>
        </ul>
      </fieldset>
    </form>

    <div id="nav">
      <span id="nav1"><a href="index.php">Continue Updating</a></span>
      <span id="nav2"><a href="finishedUpdate.php">Finished Updating</a></span>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <?php

    if (empty($_POST["name"])) {
      // if nothing was typed into the name field, redirect back to index.php
      header("Location: index.php");
    }
  
  ?>
  <head>
    <meta charset="UTF-8" />
    <title>Lab03 - displayFormData Page</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1 style="font-size:14pt; text-indent:360px;">
      Lab 03 - displayFormData Page
    </h1>
    <form id="form0" method="post" action="">
      <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
          <li>
            <span><?php echo($_POST["name"]);?></span>
          </li>
          <li>
            <span><?php echo($_POST["address"]);?></span>
          </li>
          <li>
            <span
              ><?php echo($_POST["city"]);?>,
              <?php echo($_POST["state"]);?>
              <?php echo($_POST["zip"]);?></span
            >
          </li>
          <li>
            <span><?php echo($_POST["country"]);?></span>
          </li>
          <li>
            <span><?php echo($_POST["phone"]);?></span>
          </li>
          <li>
            <span><?php echo($_POST["email"]);?></span>
          </li>
          <li>
            <span
              ><br />Comments:<br />
              <?php echo($_POST["comments"]);?></span
            >
          </li>
        </ul>
      </fieldset>
      <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
          <li>
            <span><?php echo($_POST["Sname"]);?></span>
          </li>
          <li>
            <span><?php echo($_POST["Saddress"]);?></span>
          </li>
          <li>
            <span
              ><?php echo($_POST["Scity"]);?>,
              <?php echo($_POST["Sstate"]);?>
              <?php echo($_POST["Szip"]);?></span
            >
          </li>
          <li>
            <span><?php echo($_POST["Scountry"]);?></span>
          </li>
        </ul>
      </fieldset>
      <fieldset id="submit">
        <input id="SubmitBtn" name="SubmitBtn" type="submit" value="Proceed" />
      </fieldset>
    </form>
    <script type="text/javascript">
      document.getElementById("name").focus();
    </script>
  </body>
</html>

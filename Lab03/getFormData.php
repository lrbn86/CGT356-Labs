<!DOCTYPE html>
<html lang="en">
  <?php

  if (empty($_POST["name"])) {
    // if nothing was typed into the name field, redirect back to index.php
    header("Location: index.php");
  }
  
  $name = $_POST["name"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $country = $_POST["country"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $comments = $_POST["comments"];

  if(empty($_POST["Sname"])) {
    // nothing was typed into shipping name, so copy the billing into shipping
    $Sname = $name;
    $Saddress = $address;
    $Scity = $city;
    $Sstate = $state;
    $Szip = $zip;
    $Scountry = $country;
  } else {
    // something was typed into shipping name, so pull all shipping values
    $Sname = $_POST["Sname"];;
    $Saddress = $_POST["Saddress"];;
    $Scity = $_POST["Scity"];
    $Sstate = $_POST["Sstate"];
    $Szip = $_POST["Szip"];
    $Scountry = $_POST["Scountry"];
  }

  ?>
  <head>
    <meta charset="UTF-8" />
    <title>Lab03 - getFormData Page</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1 style="font-size:14pt; text-indent:360px;">
      Lab 03 - getFormData Page
    </h1>
    <form id="form0" method="post" action="displayFormData.php">
      <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
          <li>
            <label title="Name" for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" size="30" maxlength="30" value="<?php echo($name);?>" />
          </li>
          <li>
            <label title="Address" for="address">Address <span>*</span></label>
            <input type="text" name="address" id="address" size="30" maxlength="30" value="<?php echo($address);?>" />
          </li>
          <li>
            <label title="City" for="city">City <span>*</span></label>
            <input type="text" name="city" id="city" size="30" maxlength="30" value="<?php echo($city);?>" />
          </li>
          <li>
            <label title="State" for="state">State <span>*</span></label>
            <input type="text" name="state" id="state" size="30" maxlength="30" value="<?php echo($state);?>" />
          </li>
          <li>
            <label title="Zip" for="zip">Zip Code <span>*</span></label>
            <input type="text" name="zip" id="zip" size="7" maxlength="5" value="<?php echo($zip);?>" />
          </li>
          <li>
            <label title="Country" for="country">Country <span>*</span></label>
            <input type="text" name="country" id="country" size="30" maxlength="30" value="<?php echo($country);?>" />
          </li>
          <li>
            <label title="Phone" for="phone">Phone <span>*</span></label>
            <input type="text" name="phone" id="phone" size="30" maxlength="30" value="<?php echo($phone);?>" />
          </li>
          <li>
            <label title="Email" for="email">Email <span>*</span></label>
            <input type="text" name="email" id="email" size="30" maxlength="30" value="<?php echo($email);?>" />
          </li>
          <li>
            <label title="Comments" for="comments">Questions or Comments <span>*</span></label>
            <!-- textarea does not support value attribute, so include directly between the tags instead -->
            <textarea rows="5" cols="40" name="comments" id="comments"><?php echo($comments);?></textarea>
          </li>
        </ul>
      </fieldset>
      <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
          <li>
            <label title="SName" for="Sname">Name </label>
            <input type="text" name="Sname" id="Sname" size="30" maxlength="30" value="<?php echo($Sname);?>" />
          </li>
          <li>
            <label title="SAddress" for="Saddress">Address </label>
            <input type="text" name="Saddress" id="Saddress" size="30" maxlength="30" value="<?php echo($Saddress);?>" />
          </li>
          <li>
            <label title="SCity" for="Scity">City </label>
            <input type="text" name="Scity" id="Scity" size="30" maxlength="30" value="<?php echo($Scity);?>" />
          </li>
          <li>
            <label title="SState" for="Sstate">State </label>
            <input type="text" name="Sstate" id="Sstate" size="30" maxlength="30" value="<?php echo($Sstate);?>" />
          </li>
          <li>
            <label title="SZip" for="Szip">Zip Code </label>
            <input type="text" name="Szip" id="Szip" size="7" maxlength="5" value="<?php echo($Szip);?>" />
          </li>
          <li>
            <label title="SCountry" for="Scountry">Country </label>
            <input type="text" name="Scountry" id="Scountry" size="30" maxlength="30" value="<?php echo($Scountry);?>" />
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

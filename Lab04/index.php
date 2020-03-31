<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Lab 04 - Index Page</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1 style="font-size:14pt; text-indent:360px;">Lab 04 - Index Page</h1>
    <form id="form0" method="post" action="storeInfo.php">
      <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
          <li>
            <label title="Name" for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["name"])){echo($_SESSION["name"]);}?>"/>
          </li>
          <li>
            <label title="Address" for="address">Address <span>*</span></label>
            <input type="text" name="address" id="address" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["address"])){echo($_SESSION["address"]);}?>"/>
          </li>
          <li>
            <label title="City" for="city">City <span>*</span></label>
            <input type="text" name="city" id="city" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["city"])){echo($_SESSION["city"]);}?>"/>
          </li>
          <li>
            <label title="State" for="state">State <span>*</span></label>
            <input type="text" name="state" id="state" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["state"])){echo($_SESSION["state"]);}?>"/>
          </li>
          <li>
            <label title="Zip" for="zip">Zip Code <span>*</span></label>
            <input type="text" name="zip" id="zip" size="7" maxlength="5" 
                   value="<?php if(!empty($_SESSION["zip"])){echo($_SESSION["zip"]);}?>"/>
          </li>
          <li>
            <label title="Country" for="country">Country <span>*</span></label>
            <input type="text" name="country" id="country" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["country"])){echo($_SESSION["country"]);}?>"/>
          </li>
          <li>
            <label title="Phone" for="phone">Phone <span>*</span></label>
            <input type="text" name="phone" id="phone" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["phone"])){echo($_SESSION["phone"]);}?>"/>
          </li>
          <li>
            <label title="Email" for="email">Email <span>*</span></label>
            <input type="text" name="email" id="email" size="30" maxlength="30" 
                   value="<?php if(!empty($_SESSION["email"])){echo($_SESSION["email"]);}?>"/>
          </li>
          <li>
            <label title="Comments" for="comments">Questions or Comments <span>*</span></label>
            <textarea rows="5" cols="40" name="comments" id="comments"><?php if(!empty($_SESSION["comments"])){echo($_SESSION["comments"]);}?></textarea>
          </li>
        </ul>
      </fieldset>
      <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
          <li>
            <label title="SName" for="Sname">Name </label>
            <input type="text" name="Sname" id="Sname" size="30" maxlength="30" 
                   value="<?php if (!empty($_SESSION["Sname"])){echo($_SESSION["Sname"]);}?>"/>
          </li>
          <li>
            <label title="SAddress" for="Saddress">Address </label>
            <input type="text" name="Saddress" id="Saddress" size="30" maxlength="30" 
                   value="<?php if (!empty($_SESSION["Saddress"])){echo($_SESSION["Saddress"]);}?>"/>
          </li>
          <li>
            <label title="SCity" for="Scity">City </label>
            <input type="text" name="Scity" id="Scity" size="30" maxlength="30" 
                   value="<?php if (!empty($_SESSION["Scity"])){echo($_SESSION["Scity"]);}?>"/>
          </li>
          <li>
            <label title="SState" for="Sstate">State </label>
            <input type="text" name="Sstate" id="Sstate" size="30" maxlength="30" 
                   value="<?php if (!empty($_SESSION["Sstate"])){echo($_SESSION["Sstate"]);}?>"/>
          </li>
          <li>
            <label title="SZip" for="Szip">Zip Code </label>
            <input type="text" name="Szip" id="Szip" size="7" maxlength="5" 
                   value="<?php if (!empty($_SESSION["Szip"])){echo($_SESSION["Szip"]);}?>"/>
          </li>
          <li>
            <label title="SCountry" for="Scountry">Country </label>
            <input type="text" name="Scountry" id="Scountry" size="30" maxlength="30" 
                   value="<?php if (!empty($_SESSION["Scountry"])){echo($_SESSION["Scountry"]);}?>"/>
          </li>
        </ul>
      </fieldset>
      <fieldset id="submit">
        <input id="SubmitBtn" name="SubmitBtn" type="submit" value="Proceed" />
      </fieldset>
    </form>
    <div id="errorMsg"><?php if (!empty($_SESSION["errorMessage"])){echo($_SESSION["errorMessage"]);}?></div>
    <script type="text/javascript">
      document.getElementById("name").focus();
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Lab03 - Index Page</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1 style="font-size:14pt; text-indent:360px;">Lab 03 - Index Page</h1>
    <form id="form0" method="post" action="getFormData.php">
      <fieldset id="billing">
        <legend>Billing Information</legend>
        <ul>
          <li>
            <label title="Name" for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" size="30" maxlength="30" />
          </li>
          <li>
            <label title="Address" for="address">Address <span>*</span></label>
            <input type="text" name="address" id="address" size="30" maxlength="30" />
          </li>
          <li>
            <label title="City" for="city">City <span>*</span></label>
            <input type="text" name="city" id="city" size="30" maxlength="30" />
          </li>
          <li>
            <label title="State" for="state">State <span>*</span></label>
            <input type="text" name="state" id="state" size="30" maxlength="30" />
          </li>
          <li>
            <label title="Zip" for="zip">Zip Code <span>*</span></label>
            <input type="text" name="zip" id="zip" size="7" maxlength="5" />
          </li>
          <li>
            <label title="Country" for="country">Country <span>*</span></label>
            <input type="text" name="country" id="country" size="30" maxlength="30" />
          </li>
          <li>
            <label title="Phone" for="phone">Phone <span>*</span></label>
            <input type="text" name="phone" id="phone" size="30" maxlength="30" />
          </li>
          <li>
            <label title="Email" for="email">Email <span>*</span></label>
            <input type="text" name="email" id="email" size="30" maxlength="30" />
          </li>
          <li>
            <label title="Comments" for="comments">Questions or Comments <span>*</span></label>
            <textarea rows="5" cols="40" name="comments" id="comments"></textarea>
          </li>
        </ul>
      </fieldset>
      <fieldset id="shipping">
        <legend>Shipping Information (if different from billing)</legend>
        <ul>
          <li>
            <label title="SName" for="Sname">Name </label>
            <input type="text" name="Sname" id="Sname" size="30" maxlength="30" />
          </li>
          <li>
            <label title="SAddress" for="Saddress">Address </label>
            <input type="text" name="Saddress" id="Saddress" size="30" maxlength="30" />
          </li>
          <li>
            <label title="SCity" for="Scity">City </label>
            <input type="text" name="Scity" id="Scity" size="30" maxlength="30" />
          </li>
          <li>
            <label title="SState" for="Sstate">State </label>
            <input type="text" name="Sstate" id="Sstate" size="30" maxlength="30" />
          </li>
          <li>
            <label title="SZip" for="Szip">Zip Code </label>
            <input type="text" name="Szip" id="Szip" size="7" maxlength="5" />
          </li>
          <li>
            <label title="SCountry" for="Scountry">Country </label>
            <input type="text" name="Scountry" id="Scountry" size="30" maxlength="30" />
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

<?php
  session_start();
  include("includes/openDbConn.php");
?>
<!DOCTYPE html>
<html>
  </head>
    <meta charset="UTF-8"/>
    <title>Lab 5 - Select</title>
  </head>
  <body>
    <?php
      // prepare mysql statement
      $sql = "SELECT UserID, LastName, FirstName, Title FROM usersLab5";
      // execute the sql query and store the result of the execution into $result
      // the $db is the variable you created in openDbConn.php
      $result = mysqli_query($db, $sql);
      // check to see if there are records in the result, if not set the number
      // results to 0
      if (empty($result))
        $num_results = 0;
      else
        $num_results = mysqli_num_rows($result);
    ?>
    <h1 style="text-align:center">Lab 5 - Select</h1>
    <?php
      include("includes/menu.php");
    ?>
    <table style="border:0px; width:500px; padding: 0px; margin:0px auto; border-spacing:0px;" title="Listing of Users">
      <thead>
        <tr>
          <th colspan="4" style="font-weight: bold; background-color: #b1946c; text-align:center; text-decoration:underline;">usersLab5 table</th> 
        </tr>
        <tr>
          <th style="background-color: #194c; font-weight: bold;">UserID</th>
          <th style="background-color: #194c; font-weight: bold;">LastName</th>
          <th style="background-color: #194c; font-weight: bold;">FirstName</th>
          <th style="background-color: #194c; font-weight: bold;">Title</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="4" style="text-align:center; font-style:italic;">Information pulled from MySQL database</td>
        </tr>
      </tfoot>
      <tbody>
        <?php
          // loop through the results
          for($i=0;$i<$num_results;$i++) {
            // store a single record out of $result into $row
            $row = mysqli_fetch_array($result);
            // below, ALWAYS use trim() on data pulled from the database
            ?>
            <tr>
              <td style="border-right:1px solid #000000;">
                <a href="updateUser.php?id=<?php echo(trim($row["UserID"]));?>">edit</a> |
                <a href="deleteUser.php?id=<?php echo(trim($row["UserID"]));?>">delete</a>
              </td>
              <td style="border-right:1px solid #000000;"><?php echo(trim($row["LastName"]));?></td>
              <td style="border-right:1px solid #000000;"><?php echo(trim($row["FirstName"]));?></td>
              <td><?php echo(trim($row["Title"]));?></td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
    <p>&nbsp;</p>
    <!-- Everything below here is copied from up above and modified to pull from the shippersLab5 table --> 
    <?php
      // prepare mysql statement
      $sql = "SELECT ShipperID, CompanyName, Phone FROM shippersLab5";
      // execute the sql query and store the result of the execution into $result
      // the $db is the variable you created in openDbConn.php
      $result = mysqli_query($db, $sql);
      // check to see if there are records in the result, if not set the number
      // results to 0
      if (empty($result))
        $num_results = 0;
      else
        $num_results = mysqli_num_rows($result);
    ?>
    <table style="border:0px;width:500px;padding:0px;margin:0px auto;border-spacing:0px;" title="Listing of Users">
      <thead>
        <tr>
          <th colspan="3" style="font-weight: bold; background-color: #b1946c; text-align:center; text-decoration:underline;">shippersLab5 table</th> 
        </tr>
        <tr>
          <th style="background-color: #194c; font-weight: bold;">ShipperID</th>
          <th style="background-color: #194c; font-weight: bold;">CompanyName</th>
          <th style="background-color: #194c; font-weight: bold;">Phone</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="3" style="text-align:center; font-style:italic;">Information pulled from MySQL database</td>
        </tr>
      </tfoot>
      <tbody>
        <?php
          // loop through the results
          for($i=0;$i<$num_results;$i++) {
            // store a single record out of $result into $row
            $row = mysqli_fetch_array($result);
            // below, ALWAYS use trim() on data pulled from the database
            // About trim()
            // A database column(field) may be set up to hold, say, 12 characters, When you pull that column
            // from the database using $row[], it gives you all 12 characters (actual number of chars varies by column)
            // even if some of them are empty spaces. Say you store "hello" into that column. When you pull it out, you
            // get "hello        " using trim() removes all the extra spaces to give you "hello"
            ?>
            <tr>
              <td style="border-right:1px solid #000000;">
                <a href="update.php?id=<?php echo(trim($row["ShipperID"]));?>">edit</a> | 
                <a href="delete.php?id=<?php echo(trim($row["ShipperID"]));?>">delete</a>
              </td>
              <td style="border-right:1px solid #000000;"><?php echo (trim($row["CompanyName"]));?></td>
              <td><?php echo(trim($row["Phone"]));?></td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
    <!-- End of what was copied from above-->
<?php
  // close the database connection
  include("includes/closeDbConn.php");
?>
  </body>
</html>

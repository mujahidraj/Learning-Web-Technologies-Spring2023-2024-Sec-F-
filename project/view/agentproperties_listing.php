<?php


if(!isset($_COOKIE['flag'])){
    header('location: agentlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property List</title>
</head>
<body>


<form action="agent-property-management/controller/delete_property.php" method="post">
    <fieldset align="center">
        <legend><h3>PROPERTIES LIST</h3></legend>

<table border="1" cellspacing="0" cellpadding="5" align="center">
  <thead>
    <tr>
        <th>checkbox</th>
      <th>Property ID</th>
      <th>Property Name</th>
      <th>Property Type</th>
      <th>Property Location</th>
      <th>Property Size</th>
      <th>Property Room</th>
      <th>Property Price</th>
    </tr>
  </thead>
  <tbody>
  <?php

require '../model/config.php';

    $sql = "SELECT id, properties_name,type, location ,size ,room, price FROM properties";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><input type='checkbox' name='id[]' value='" . $row["id"] . "'></td>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["properties_name"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["location"] . "</td>";
            echo "<td>" . $row["size"] . "</td>";
            echo "<td>" . $row["room"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "</tr>";
        }
    } 
    else {
        echo "<tr><td colspan='4'>No properties found</td></tr>";
    }
    $conn->close();

?>
  </tbody>
 
</table>
<br><br>
<a href="agent-property-management/view/add_properties.php"><button type="button">Insert Property</button></a>
<input type="submit" name="submit" value="Delete Property">
<a href="agent-property-management/view/update_input.php"><button type="button">Update Property</button></a>
</fieldset>

</form>

</body>
</html>

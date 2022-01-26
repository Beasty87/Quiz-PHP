<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLES</title>
</head>
<body>
    <form action="connection.php" method="POST">
    <input type="text" name="table_name"><br><br>
    <label for="type">TYPE</label>
    <select name="type" id="type">
        <option value="INT">INT</option>
        <option value="VAR">VARCHAR</option>
        <option value="text">TEXT</option>
    </select><br><br>
    <input type="text" name="lenght"><br>
    <input type="radio" id="primary" name="lenght" value="PRIMARY" checked>
    <label for="primary">PRIMARY</label>
    <input type="radio" id="unique" name="lenght" value="UNIQUE">
    <label for="unique">UNIQUE</label>
    <input type="radio" id="index" name="lenght" value="INDEX">
    <label for="primary">INDEX</label><br><br>
    <input type="checkbox" name="null" value="value" checked><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>


    <br><br><br>

    <form action="connection.php" method="POST">
    <table>
        <tr>
           <th>Table name</th>
           <th>Type</th>
           <th>Lenght/Values</th>
           <th>Index</th>
           <th>Null</th>
        </tr>
        <tr>
         <td><input type="text" name="name" id="name" required></td>
          <td><select name="name" id="name">
              <option value="INT">INT</option>
              <option value="VAR">VARCHAR</option>
              <option value="text">TEXT</option>
              <option value="date">DATE</option>
              <option value="boolean">BOOLEAN</option>
          </select></td>
          <td><input type="text" name="phone" id="phone"></td>
          <td><input type="radio" id="primary" name="lenght" value="PRIMARY" checked>
          <label for="primary">Primary</label>
          <input type="radio" id="unique" name="lenght" value="UNIQUE">
          <label for="unique">Unique</label>
          <input type="radio" id="index" name="lenght" value="INDEX">
          <label for="primary">Index</label></td>
          <td><input type="checkbox" name="null" value="value" checked></td>
        </tr>
    </table><br>
    <input class="submit" type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
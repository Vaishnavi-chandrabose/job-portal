<html>
<body>
<div class="home-content">       
    <br>
    <table border="2">
        <thead>
      <tr>
       <th bgcolor="#73A16C" style="font-style:Georgia; color:brown; font-size:18px;">ID</th>
        <th bgcolor="#F0E68C" style="font-style:Georgia; color:brown; font-size:18px;">COMPANY NAME</th>
        <th bgcolor="#BCB88A" style="font-style:Georgia; color:brown; font-size:18px;">JOB TITLE</th>
        <th bgcolor="rosybrown" style="font-style:Georgia; color:brown; font-size:18px;">SALARY</th>
        <th bgcolor="darksalmon" style="font-style:Georgia; color:brown; font-size:18px;">NUMBER OF POSTING</th>
        <th bgcolor="#73A16C" style="font-style:Georgia; color:brown; font-size:18px;">LOCATION</th>
      </tr>
    </thead>
        <tbody>

<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "submit";
      $connection = new mysqli($servername, $username, $password, $database);
      if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }
      $sql = "SELECT * FROM submit";
      $result = $connection->query($sql);

            if (!$result) {
        die("Invalid query: " . $connection->error);
      }
      while($row = $result->fetch_assoc()) {
               echo "<tr>
	<td>" . $row["id"] . "</td>
                    <td>" . $row["company"] . "</td>
                    <td>" . $row["job"] . "</td>
                    <td>" . $row["salary"] . "</td>
                    <td>" . $row["number"] . "</td>
                    <td>" . $row["location"] . "</td>
                   </tr>";
            }
            $connection->close();
            ?>
   </tbody>
    </table>
    </div>
</body>
</html>
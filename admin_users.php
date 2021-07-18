<html>
    <head>
    <link rel="icon" href="https://t3w8f2g9.stackpathcdn.com/wp-content/uploads/2018/01/Airbnb-Effect-1.png" type="image/x-icon">

        <meta charset="UTF-8">
        <title>Client Hotel</title>

        <style>

body
{
    color: rgb(112, 236, 11);
    background: #fbfcf9;
    background-image: url(https://eskipaper.com/images/brown-background-8.jpg);
    font-family: "Patua One", sans-serif;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
    background-color: red;
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
}
td {
    background-color: blue;
  border: 5px solid black;
  text-align: left;
  padding: 8px;
}

}
</style>
    </head>
    <body>
        
   
<?php

require "connect_db.php";

$sql = "SELECT * FROM Hotel0369 LIMIT 100";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Data</th>";
                echo "<th>Nume</th>";
                echo "<th>Email</th>";
                echo "<th>Telefon</th>";
                echo "<th>Camera</th>";
                echo "<th>Mesaj</th>";
                echo "<th>De_la</th>";
                echo "<th>Pana_la</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['DataR'] . "</td>";
                echo "<td>" . $row['Nume'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Telefon'] . "</td>";
                echo "<td>" . $row['Camera'] . "</td>";
                echo "<td>" . $row['Mesaje'] . "</td>";
                echo "<td>" . $row['Data1'] . "</td>";
                echo "<td>" . $row['Data2'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
?>

</body>
</html>

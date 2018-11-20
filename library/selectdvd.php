
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>



<?php
$q = intval($_GET['q']);



$con = mysqli_connect('127.0.0.1:8080','root','nbuser','dvdst');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


mysqli_select_db($con,"dvdst");
$sql="SELECT * FROM publisher WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>publisher_id</th>
<th>publisher_name</th>
<th>Publisher_country</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['publisher_id'] . "</td>";
    echo "<td>" . $row['publisher_name'] . "</td>";
    echo "<td>" . $row['Publisher_country'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con); ?>

</body>
</html>

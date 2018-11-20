
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



$con = new mysqli('localhost','root','','bookdb');

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


mysqli_select_db($con,"bookdb");
$sql="SELECT * FROM booktb WHERE id = '".$q."'";
$result = $con->query($sql);



echo "<table>
<tr>
<th>Title</th>
<th>Author</th>
<th>Publisher</th>
<th>Year</th>
<th>ISBN</th>
</tr>";


if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['publisher'] . "</td>";
    echo "<td>" . $row['yr'] . "</td>";
    echo "<td>" . $row['isbn'] . "</td>";
    echo "</tr>";
}
}
echo "</table>";
mysqli_close($con); ?>

</body>
</html>

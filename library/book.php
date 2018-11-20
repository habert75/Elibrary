
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdb";



$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));


mysqli_select_db($con,$dbname);
$sql="SELECT * FROM booktb WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Title</th>
<th>Author</th>
<th>Publisher</th>
<th>Year</th>
<th>ISBN</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['publisher'] . "</td>";
    echo "<td>" . $row['yr'] . "</td>";
    echo "<td>" . $row['isbn'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con); 

?>

</body>
</html>
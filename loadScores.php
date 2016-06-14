<?php
$con = mysqli_connect('localhost','root','','ranking');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM table1 ORDER BY score DESC  LIMIT 5";
$result = mysqli_query($con,$sql);
echo "<div class=\"list1\">";
while($row = mysqli_fetch_array($result)) {
    echo "<div class=\"list\">";
    echo "<h2>Score: " . $row['score'] . "</h2>";
    echo "<p>Name: " . $row['name'] . "</p>";
    echo "</div>";

}
echo "</div>";
mysqli_close($con);
?>
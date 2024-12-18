<?php
include("database.php");
$sql="select * from library";
$result=mysqli_query($conn,$sql);
echo "<center><table border='5' style = border-color:blue;>";
echo "<th>BOOKID</td>";
echo "<th>TITLE</td>";
echo "<th>AUTHOR</td>";
echo "<th>EDITION</td>";
echo "<th>PUBLISHER</td>";
while($row=mysqli_fetch_assoc($result))
{
  echo "<tr>";
  echo  "<td>".$row['bookid']."</td>", "<td>".$row['title']."</td>","<td>".$row['author']."</td>","<td>".$row['edition']."</td>", "<td>".$row['publisher']."</td>";
  echo "</tr>";
}
echo "</table></center>"
?>

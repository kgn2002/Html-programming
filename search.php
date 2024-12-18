<html>
    <head><title>SEARCH</title>
    <style>body{background-color: blanchedalmond;}
        form{justify-content: center;display: flex;}
        th{font-size: large;font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: left;}
    </style> 
    </head>
    <body>
        <center><h1>DSPLAY A BOOK</h1><br><form method ="post" action="search.php">
            <table>
                <tr>
                    <th>Enter the Bookid to be Search</th>
                    <td><input type="num" id="bookid" name="bookid" required></td>
                </tr>
                <tr>
                    <th></th>
                <td><input type="submit" name="submit" id="submit" value="SEARCHS"></td>
                </tr>
            </table>
        </form></center>
    </body>
</html><?php
include("database.php");
if(isset($_POST['bookid']))
{
$bookid=$_POST['bookid'];
$sql="select * from library WHERE bookid='$bookid'";
$result=mysqli_query($conn,$sql);
echo "<center><table border='5' style = border-color:blue;>";
echo "<th>BOOKID</td>";
echo "<th>TITLE</td>";
echo "<th>AUTHOR</td>";
echo "<th>EDITION</td>";
echo "<th>PUBLISHER</td>";
while($row=mysqli_fetch_assoc($result))
{ 
  echo"<script>alert('BOOKID:{$row['bookid']} TITLE:{$row['title']} AUTHOR:{$row['author']} EDITION:{$row['edition']} PUBLISHER:{$row['publisher']}')</script>";

  echo "<tr>";
  echo  "<td>".$row['bookid']."</td>", "<td>".$row['title']."</td>","<td>".$row['author']."</td>","<td>".$row['edition']."</td>", "<td>".$row['publisher']."</td>";
  echo "</tr>";
}


echo "</table></center>";
}
?>
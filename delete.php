<html>
    <head><title>DELETE</title>
    <style>body{background-color: blanchedalmond;}
        form{justify-content: center;display: flex;}
        th{font-size: large;font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: left;}
    </style> 
    </head>
    <body>
        <center><h1>REMOVE  A BOOK</h1><br><form method ="post" action="delete.php">
            <table>
                <tr>
                    <th>Enter the Bookid</th>
                    <td><input type="num" id="bookid" name="bookid" required></td>
                </tr>
                <tr>
                    <th></th>
                <td><input type="submit" name="submit" id="submit" value="DELETE"></td>
                </tr>
            </table>
        </form></center>
    </body>
</html><?php
include("database.php");
if(isset($_POST['bookid']))
{
$bookid=$_POST['bookid'];
$sql1="DELETE FROM library WHERE bookid='$bookid'";
$result=mysqli_query($conn,$sql1);
if($result && mysqli_affected_rows($conn)>0)
{
    echo "<script>alert('Deleted succesfully')</script>";
}
else{
    echo "<script>alert('Error')</script>";
}
}
mysqli_close($conn);
?>
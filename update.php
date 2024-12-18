<html>
    <head><title>UPDATE</title>
    <style>body{background-color: blanchedalmond;}
        form{justify-content: center;display: flex;}
        th{font-size: large;font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: left;}
    </style> 
    </head>
    <body>
        <center><h1>UPDATE  A BOOK</h1><br><form method ="post" action="update.php">
            <table>
                <tr>
                    <th>Enter the Bookid</th>
                    <td><input type="num" id="bookid2" name="bookid2" required></td>
                </tr>
                <tr>
                    <th></th>
                <td><input type="submit" name="submit" id="submit" value="Get details"></td>
                </tr>
            </table>
        </form></center><center><h2>Updation of items</h2><form method ="post" action="update.php">
            <table>
                <tr>
                    <th>Enter the Bookid</th>
                    <td><input type="num" id="bookid" name="bookid" readonly></td>
                </tr>
                <tr>
                    <th>Enter the Book name</th>
                    <td><input type="text" id="title" name="title" required></td>
                </tr>
                <tr>
                    <th>Enter the Author</th>
                    <td><input type="text" id="author" name="author" required></td>
                </tr>
                <tr>
                    <th>Enter the Edition</th>
                    <td><input type="text" id="edition" name="edition" required></td>
                </tr>
                <tr>
                    <th>Enter the Publisher</th>
                    <td><input type="text" id="publisher" name="publisher" required></td>
                </tr>
                <tr>
                    <th></th>
                <td><input type="submit" name="update" id="submit" value="UPDATE"></td>
                </tr>
            </table>
        </form></center>
    </body>
</html><?php
include("database.php");
if(isset($_POST['bookid2']))
{
$bookid2=$_POST['bookid2'];
$sqli="select * from library where bookid='$bookid2'";
$r=mysqli_query($conn,$sqli);
if($r && mysqli_affected_rows($conn)>0)
{
    $row=mysqli_fetch_assoc($r);
    echo "<script>document.getElementById('bookid').value={$row['bookid']}</script>";
    echo "<script>document.getElementById('title').value='{$row['title']}'</script>";
    echo "<script>document.getElementById('author').value='{$row['author']}'</script>";
    echo "<script>document.getElementById('edition').value='{$row['edition']}'</script>";
    echo "<script>document.getElementById('publisher').value='{$row['publisher']}'</script>";
}
}
?>
<?php
if(isset($_POST['update']))
{

if(isset($_POST['bookid']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['edition']) && isset($_POST['publisher']))
{
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];

$sql="UPDATE `library` SET `title`='$title',`author`='$author',`edition`='$edition',`publisher`='$publisher' WHERE bookid='$bookid'" ;
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script>alert('Updated  succesfully')</script>";
    echo "Updated Succesfully";
}
else
{
    echo "<script>alert('Error')</script>";
}
}
}

mysqli_close($conn);
?>
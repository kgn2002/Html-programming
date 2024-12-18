<html>
    <head><title>INSERT</title>
    <style>body{background-color: blanchedalmond;}
        form{justify-content: center;display: flex;}
        th{font-size: large;font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: left;}
    </style> 
    </head>
    <body>
        <center><h1>ADD A BOOK</h1><br><form method ="post" action="insert.php">
            <table>
                <tr>
                    <th>Enter the Bookid</th>
                    <td><input type="num" id="bookid" name="bookid" required></td>
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
                <td><input type="submit" name="submit" id="submit" value="Insert"></td>
                </tr>
            </table>
        </form></center>
    </body>
</html><?php
include("database.php");

if(isset($_POST['bookid']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['edition']) && isset($_POST['publisher']))
{
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];

$sql="INSERT INTO `library`(`bookid`, `title`, `author`, `edition`, `publisher`) VALUES ('$bookid','$title','$author','$edition','$publisher')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script>alert('Addesd succesfully')</script>";
    echo "Inserted succesfully";
}
else
{
    echo "<script>alert('Error')</script>";
}

}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>body{background-color: grey;}
    h1{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: larger;}
        label{font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: large;}
form{
	display:flex;
	justify-content:center;
}
td{
text-align:left;
padding:20px;
font-family:"Sans-serif";
font-size:18px;
color:black;
}
th{
text-align:right;
padding:20px;
font-family:"Sans-serif";
font-size:px;
color:black;
}
    </style>
    <title>Student List</title>
</head>
<body>
    <form method="post" action="php15.php">
        <table>
        <tr><th>
        <label><h1>Indian Cricket Players</h1></label></th><td>
        <textarea id="plist" name="plist" rows="10" col="10"></textarea></td></tr>
        <tr><th></th><td><input type="submit" value="ENROLL"></td></tr>     
        </table></form>
        <?php
        if(isset($_POST["plist"]))
        {
        $plist=$_POST["plist"];
        $exp="/[\s,\.]+/";
        $plist=preg_split($exp,$plist);
        $plist=array_values($plist);
        print_r($plist);
        echo "<table>";
        echo "<th>Indian Players List</th>";
        foreach($plist as $i)
             echo "<tr><td>$i</td></tr>";
        echo "</table>";
        }



        ?>

</body>
</html>
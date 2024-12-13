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
    <form method="post" action="php14.php">
        <table>
        <tr><th>
        <label>Enter the name of students</label></th><td>
        <textarea id="slist" name="slist" rows="10" col="10"></textarea></td></tr>
        <tr><th></th><td><input type="submit" value="ENROLL"></td></tr>     
        </table></form>
        <?php
        if(isset($_POST["slist"]))
        {
        $slist=$_POST["slist"];
        $exp="/[\s,\.]+/";
        $slist=preg_split($exp,$slist);
        $slist=array_values($slist);
        echo "<br><bR><cenetr>Arra elements</center>";
        print_r($slist);
        echo "<br><br><cenetr>Ascending order</center>";
        asort($slist);
        print_r($slist);
        echo "<br><br><cenetr>Descending order</center>";
        sort($slist);
        print_r($slist);
       }



        ?>

</body>
</html>
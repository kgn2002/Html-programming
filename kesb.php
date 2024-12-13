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

    </style>
    <title>KSEB bill</title>
</head>
<body>
    <form method="post" action="kesb.php">
      <table>
        <tr><th>
     <label>Enter the units used</label></th><td>
     <input type="number" name="bill" required></td></tr>
     <tr><th></th><td><input type="submit" value="Submit"></td></tr>
     <tr><th><label>Total amount is</label></th><td>
     <input type="text" id="amount" name="amount" readonly></td></tr>
     </table></form>
    <?php
      if(isset($_POST["bill"]))
      {
        $rate;
        $unit=$_POST["bill"];
       if($unit!=0)
       {
        if($unit<100)
        {
          $rate=$unit*3;
          echo "<script>document.getElementById('amount').value=$rate</script><br><center><h1>Your bill is $rate Rs</h1></center>";
        }
        elseif($unit>100 || $unit<200)
        {
          $rate=$unit*4;
          echo "<script>document.getElementById('amount').value=$rate</script><br><center><h1>Your bill is $rate Rs</h1></center>";
        }
        else
        {
          $rate=$unit*5;
          echo "<script>document.getElementById('amount').value=$rate</script><br><center><h1>Your bill is $rate Rs</h1></center>";
        }
       }
       else
       {
         echo "<center>Invalid unit</center>";
       }
      }


     ?>
</body>
</html>
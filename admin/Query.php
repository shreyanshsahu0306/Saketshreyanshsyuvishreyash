<?php
$server = "localhost";
$username ="root";
$password = "";
                      
$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con,'wedding');

if(!$con){
    die("conection faild".mysqli_connect_error());
}
$sql = "SELECT * FROM Query ";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
// echo $num;
if ($num > 0) {
    
} else {
    echo "0 results";
}
mysqli_close($con);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <!-- TABLE START HERE -->
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <th scope="row">
                <?php echo $row["id"] ?>
            </th>
            <td>
                <?php echo $row["Name"]?>
            </td>
            <td>
                <?php echo $row["Email"]?>
            </td>
            <td>
                <?php echo $row["Subject"]?>
            </td>
            <td>
                <?php echo $row["Msg"]?>
            </td>
            <td>
            <?php $Status = $row["Status"];
                if ($Status > 0) { ?>
                   <a href="#" class="badge badge-success">Solve</a> 
            <?php }else{ ?>
                <a href="QuerySolve.php?id=<?php echo $row["id"]?>" class="badge badge-danger">Panding</a>
            <?php } ?>
            </td>
        </tr>
        <?php } ?>
    
  </tbody>
    
</table>

      <!-- TABLE END HERE -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

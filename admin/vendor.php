<?php

$server = "localhost";
$username ="root";
$password = "";
                      
$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con,'wedding');

if(!$con){
    die("conection faild".mysqli_connect_error());
}
$sql = "SELECT * FROM vendors_testing";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
// echo $num ;

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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body>
    <table class="table">
        <thead class="">
            <tr>
                <th scope="col">SN</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Business Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Category</th>
                <th scope="col">charges</th>
                <th scope="col">Location</th>
                <th scope="col">Other Details</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)){?>
            <!-- echo "id: " . $row["id"]. " - Name: " . $row["name"]. " -contact: " . $row["contact"]. " -category:" . $row["category"]. "<br>"; -->
           <tr>
            <th scope="row">
                <?php echo $row["id"] ?>
            </th>
            <td>
                <?php echo $row["name"]?>
            </td>
            <td>
                <?php echo $row["email"]?>
            </td>
            <td>
                <?php echo $row["businessName"]?>
            </td>
            <td>
                <?php echo $row["contact"]?>
            </td>
            <td>
                <?php echo $row["category"]?>
            </td>
            <td>
                <?php echo $row["ServiceCharge"]?>
            </td>
            <td>
                <?php echo $row["Location"]?>
            </td>
            <td>
                <?php echo $row["OtherDetails"]?>
            </td>
            <td>
                <?php echo $row["image"]?>
            </td>
            <td>
                <button class="btn btn-danger"><a href="DeleteVendor.php?id= <?php echo $row['id']?>" class="text-white">Delete</a></button>
            </td>
        </tr>
            <?php } ?>

        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
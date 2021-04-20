<?php
session_start();
if (isset($_SESSION['email'])) {
    # code...
}
else{
    header("Location:index.php");
}               
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Admin Panel</title>
  </head>
  <body>
      <!-- Navbar section -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid shadow-sm">
          <h4 class="navbar-brand">weddingz</h4>
          <span class="d-flex text-center">
          
          <button type="button" class="btn bg-light" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle link-dark"></i>
            Add Vendor
          </button>
          <a class="nav-link mt-auto " href="#"><i class="fas fa-bell link-dark"></i></a>
          <a href="logout.php" class="btn btn-outline-dark m-lg-1 px-5 " role="button">Logout</a>
            
          <!-- DropDown for profile -->

          <div class="dropdown">
            <button class="btn btn-outline-dark m-lg-1 px-5 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php
            // session_start();

            // Show user name in profile section
              if (isset($_SESSION['email'])) {
                  $email = $_SESSION['email'];
                  echo "<h4 class='super'> $email </h4>";
              }

            // shoe user image in profile section
              if (isset($_SESSION['user_image'])) { 
              echo '<img src="'.$_SESSION["user_image"].'" class="GoogleImg" style ="height: 45px; border-radius: 30px;" />';
              }
           ?>
              
            </ul>
          </div>
          </span>
        </div>
      </nav>

      <!-- bootstrap model for add vendors -->
      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vendor Registration</h5>
        <button type="button" class="close btn-dark" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- model body start here -->
      <div class="modal-body">
        <form action="VendorRegister.php" method="POST">
          <div class="form-group">
            <label for="VendorName">Name</label>
            <input type="text" class="form-control" name="VendorName" placeholder="Enter your name" required>
            <label for="VendorEmail">Email address</label>
            <input type="email" class="form-control" name="VendorEmail" placeholder="name@example.com" required>
            <label for="VendorBusinessName">Business Name</label>
            <input type="text" class="form-control" name="VendorBusinessName" required >
          </div>
          <div class="form-group">
            <label for="BusinessCategory">Business Category</label>
            <select class="form-control" name="BusinessCategory" required >
              <option>Other</option>
              <option>Hotel</option>
              <option>Garden</option>
              <option>Food catering</option>
              <option>Photographer</option>
              <option>Decorator</option>
              <option>Dj and Music</option>
              <option>Choreographer</option>
              <option>Makeup Artist</option>
              <option>Bridal Designer</option>
              <option>Mehndi Artist</option>
              <option>Videographer</option>
              <option>Wedding Planner</option>
              <option>Invitation Designer</option>
            </select>
          </div>
          <div class="form-group">
            <label for="VendorContact">Contact Number</label>
            <input type="number" class="form-control" name="VendorContact" placeholder="Contact details" required>
            <label for="VendorCharges">charges</label>
            <input type="number" class="form-control" name="VendorCharges" placeholder="Service Charge" required>
            <label for="VendorLocation">Location</label>
            <input type="text" class="form-control" name="VendorLocation" placeholder="Service Location" required>
            <label for="VendorOtherDetails">Other Details</label>
            <textarea class="form-control" name="VendorOtherDetails" rows="3"></textarea>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="VendorImg" >
            <label class="custom-file-label" for="validatedCustomFile">Choose file</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div><br>
        <!-- model body ends here -->
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark mt-lg-auto">Add Vendor</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>

      <!--Dashboard section  -->
      <div class="container-fluid bg-light">
        <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow-sm">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark " aria-current="page" href="dashboard.php">
                        <span data-feather="home"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark" href="#">
                        <span data-feather="file"></span>
                        New booking
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark" href="#">
                        <span data-feather="shopping-cart"></span>
                        New Customer
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark" href="dashboard.php?vendordata=true">
                        <span data-feather="users"></span>
                        Vendor
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark" href="dashboard.php?Query=true">
                        Query
                        <?php $server = "localhost";
                              $username ="root";
                              $password = "";
                                                    
                              $con = mysqli_connect($server,$username,$password);
                              mysqli_select_db($con,'wedding');

                              if(!$con){
                                  die("conection faild".mysqli_connect_error());
                              }
                              $sql = "SELECT * FROM Query WHERE Status = 0";
                              $result = mysqli_query($con,$sql);
                              $num = mysqli_num_rows($result);?>
                      <span class="badge bg-danger"><?php echo $num;?></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-outline-dark" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                      </a>
                    </li>
                  </ul>
          
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
          
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Dashboard</h1>
                
                </div>
                <?php
                if (isset($_GET['vendordata'])) {?>
                  <h2 class= "text-center text-warning"> <?php echo "Vendors Details" ?> </h2> 
                  <?php include'vendor.php'; 
                }?> 
                <div>
                  <?php
                  if (isset($_GET['Query'])) {?>
                    <h2 class= "text-center text-warning"> <?php echo "Query Details" ?> </h2> 
                    <?php include'Query.php'; 
                  }?>
                </div>               
              </main>
              
      </div>
      <?php
      // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
      // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
      // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
      // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
      // echo '<h3><a href="logout.php">Logout</h3></div>';
      ?>
        
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
  </body>
</html>
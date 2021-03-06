<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <nav class="nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle dash" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        <?php echo "<h3>" . $_SESSION['username'] . "</h3>"; ?>
        <a class="navlink " href="welcome.php" target="_self" >Home</a>
        <a href="profile.php" class="navlink" target="_self" >Complete_Profile</a>
        <a class="submit navlink" href="logout.php" style="float: right;">Logout</a>

    </nav>
    <div class="d-flex justify-content-center form" style="margin-top: 20px;">
        <form class="row g-3 col-6 " style="border: 2px solid black; background-color: white;" action="insert.php" method="POST">
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First Name</label>
                <input type="FirstName" class="form-control" id="inputFirstName" name="firstname">
              </div>
              <div class="col-md-6">
                <label for="inputlastName" class="form-label">Last Name</label>
                <input type="lastName" class="form-control" id="inputlastName" name="lastname">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputNumber" class="form-label">Mobile Number</label>
                <input type="number" class="form-control" id="inputNumber" name="number1">
              </div> 
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            
            <div class="col-md-6">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select" name="state1">
                <option selected hidden value="">Choose...</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="UP">UP</option>
                <option value="Asam">Asam</option>
                <option value="MP"> MP</option>
                <option value="telangana">Telangana</option>
              </select>
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" placeholder="zip(000000)" name="zip">
            </div>
            <div class="col-md-6">
                <label for="inputGender" class="form-label">Gender</label>
                <select name="gender" id="inputGender" class="from-select">
                    <option selected hidden value="">Select</option>
                    <option value="M" >Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
              </div>
            
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </div>
          </form>
    </div>
</body>
</html>

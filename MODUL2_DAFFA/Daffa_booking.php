<!DOCTYPE html>
<html>
<head>
  <style>
    .navbg{
      background-color: black;
    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <title>TP WAD Modul 2</title>
</head>

<body>
<ul class="nav justify-content-center navbg">
  <li class="nav-item">
    <a class="nav-link" href="Daffa_home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Daffa_booking.php">Booking</a>
  </li>
</ul>

  <div class="row g-0">
    <div class="col-6">
      <br><br><br><br>
        <?php
        if (array_key_exists("sedan", $_POST)) {
            echo '<img src="Civic.jpg" class="img-fluid rounded-start" alt="...">';
        } elseif (array_key_exists("sport", $_POST)) {
            echo '<img src="Jazz.jpg" class="img-fluid rounded-start" alt="...">';
        } elseif (array_key_exists("besar", $_POST)) {
            echo '<img src="Rush.png" class="img-fluid rounded-start" alt="...">';
        } else {
            echo '<img src="Rush.png" class="img-fluid rounded-start" alt="...">';
        }
        ?>
   </div>

    <div class="col-6">
    <div class="container">
    <h4 class="text-center">Rent your car now!</h4>
    <form action="Daffa_mybooking.php" method="POST">
        <div class= "mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" ">
        </div>
        <div class= "mb-3">
            <label for="date" class="form-label">Book Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="dd/mm/yyyy">
        </div>
        <div class= "mb-3">
            <label for="time" class="form-label">Start Time</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>
        <div class= "mb-3">
            <label for="duration" class="form-label">Duration (Days)</label>
            <input type="number" class="form-control" id="duration" name="duration" placeholder=" ">
        </div>
        <div class= "mb-3">
                <label for="car" class="form-label">Car Type</label>
                <select class="form-control" name="car" id="">
                    <option selected disabled>Pick Car Type</option>
                    <option value="Honda Civic Type-R">Honda Civic Type-R</option>
                    <option value="Honda Jazz">Honda Jazz</option>
                    <option value="Toyota Rush">Toyota Rush</option>
                </select>
        </div>
        <div class= "mb-3">
            <label for="Number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="Number" name="Number" placeholder=" ">
        </div>

        <div class="mb-3">
        <label for="Name" class="form-label">Add Service(s)</label>
        <br>
            <input type="checkbox" id="health" name="health" value="Bike">
            <label for="vehicle1"> Health Protocol / Rp25.000</label><br>
            <input type="checkbox" id="driver" name="driver" value="Car">
            <label for="vehicle2"> Driver / Rp100.000</label><br>
            <input type="checkbox" id="full" name="full" value="Boat">
            <label for="vehicle3"> Fuel Filled / Rp250.000</label><br><br>
    </form>
    <div class="mb-3">
        <button type="submit" class="btn btn-success btn btn-primary btn-lg btn-block" href="Daffa_mybooking.php" height>Book</button>
        </form>
</div>

        
        <br>
        <br>
    </div>
  </div>
</body>
</html>
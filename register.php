<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/register.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet" />
  <title>Register</title>
</head>

<body>
  <form  method="POST"  action="services/register.service.php">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to get event updates.</p>
      <hr />

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required />

      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="fname" id="fname" required />

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Last Name" name="lname" id="lname" required />
      <label for="bdate"><b>BirthDate</b></label>
      <input type="date" placeholder="BirthDate" value="22/07/1994" name="bdate" id="bdate" required />
      <hr />

      <p>Back to event <a href="index.php">home page</a>.</p>
      </p>
      <button type="submit" class="registerbtn">Register</button>
    </div>


  </form>
  <?php
  include 'footer.php';
  ?>
</body>

</html>